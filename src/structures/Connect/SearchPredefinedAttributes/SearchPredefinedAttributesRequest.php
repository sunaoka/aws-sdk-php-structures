<?php

namespace Sunaoka\Aws\Structures\Connect\SearchPredefinedAttributes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $NextToken
 * @property int<1, 100> $MaxResults
 * @property Shapes\PredefinedAttributeSearchCriteria $SearchCriteria
 */
class SearchPredefinedAttributesRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     NextToken?: string,
     *     MaxResults?: int<1, 100>,
     *     SearchCriteria?: Shapes\PredefinedAttributeSearchCriteria
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
