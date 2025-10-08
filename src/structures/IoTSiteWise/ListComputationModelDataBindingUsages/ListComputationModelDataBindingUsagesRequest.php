<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListComputationModelDataBindingUsages;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\DataBindingValueFilter $dataBindingValueFilter
 * @property string|null $nextToken
 * @property int<1, 250>|null $maxResults
 */
class ListComputationModelDataBindingUsagesRequest extends Request
{
    /**
     * @param array{
     *     dataBindingValueFilter: Shapes\DataBindingValueFilter,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 250>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
