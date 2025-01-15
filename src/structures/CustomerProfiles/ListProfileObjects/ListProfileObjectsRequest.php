<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\ListProfileObjects;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 * @property string $DomainName
 * @property string $ObjectTypeName
 * @property string $ProfileId
 * @property Shapes\ObjectFilter|null $ObjectFilter
 */
class ListProfileObjectsRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null,
     *     DomainName: string,
     *     ObjectTypeName: string,
     *     ProfileId: string,
     *     ObjectFilter?: Shapes\ObjectFilter|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
