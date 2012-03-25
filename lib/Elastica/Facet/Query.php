<?php
/**
 * Implements the query facet.
 *
 * @category Xodoa
 * @package Elastica
 * @author Johann Reinke <johann.reinke@gmail.com>
 * @link http://www.elasticsearch.org/guide/reference/api/search/facets/query-facet.html
 */
class Elastica_Facet_Query extends Elastica_Facet_Abstract
{
    /**
     * Creates the full facet definition, which includes the basic
     * facet definition of the parent.
     *
     * @see Elastica_Facet_Abstract::toArray()
     * @return array
     */
	public function toArray() {
		$this->_setFacetParam('query', $this->_params);
		return parent::toArray();
	}
}

