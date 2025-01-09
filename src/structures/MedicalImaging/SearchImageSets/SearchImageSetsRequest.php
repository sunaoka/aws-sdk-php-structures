<?php

namespace Sunaoka\Aws\Structures\MedicalImaging\SearchImageSets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $datastoreId
 * @property Shapes\SearchCriteria $searchCriteria
 * @property int $maxResults
 * @property string $nextToken
 */
class SearchImageSetsRequest extends Request
{
    /**
     * @param array{
     *     datastoreId: string,
     *     searchCriteria?: Shapes\SearchCriteria,
     *     maxResults?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
