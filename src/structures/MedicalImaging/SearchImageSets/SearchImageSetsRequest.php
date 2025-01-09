<?php

namespace Sunaoka\Aws\Structures\MedicalImaging\SearchImageSets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $datastoreId
 * @property Shapes\SearchCriteria $searchCriteria
 * @property int<1, 50> $maxResults
 * @property string $nextToken
 */
class SearchImageSetsRequest extends Request
{
    /**
     * @param array{
     *     datastoreId: string,
     *     searchCriteria?: Shapes\SearchCriteria,
     *     maxResults?: int<1, 50>,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
