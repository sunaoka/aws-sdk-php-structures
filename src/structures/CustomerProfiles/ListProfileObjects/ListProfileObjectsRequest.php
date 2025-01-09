<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\ListProfileObjects;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextToken
 * @property int<1, 100> $MaxResults
 * @property string $DomainName
 * @property string $ObjectTypeName
 * @property string $ProfileId
 * @property Shapes\ObjectFilter $ObjectFilter
 */
class ListProfileObjectsRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string,
     *     MaxResults?: int<1, 100>,
     *     DomainName: string,
     *     ObjectTypeName: string,
     *     ProfileId: string,
     *     ObjectFilter?: Shapes\ObjectFilter
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
