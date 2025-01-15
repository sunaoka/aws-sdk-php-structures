<?php

namespace Sunaoka\Aws\Structures\MedicalImaging\SearchImageSets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $datastoreId
 * @property Shapes\SearchCriteria|null $searchCriteria
 * @property int<1, 50>|null $maxResults
 * @property string|null $nextToken
 */
class SearchImageSetsRequest extends Request
{
    /**
     * @param array{
     *     datastoreId: string,
     *     searchCriteria?: Shapes\SearchCriteria|null,
     *     maxResults?: int<1, 50>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
