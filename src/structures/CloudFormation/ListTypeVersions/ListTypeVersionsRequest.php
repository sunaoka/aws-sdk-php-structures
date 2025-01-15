<?php

namespace Sunaoka\Aws\Structures\CloudFormation\ListTypeVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'RESOURCE'|'MODULE'|'HOOK'|null $Type
 * @property string|null $TypeName
 * @property string|null $Arn
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 * @property 'LIVE'|'DEPRECATED'|null $DeprecatedStatus
 * @property string|null $PublisherId
 */
class ListTypeVersionsRequest extends Request
{
    /**
     * @param array{
     *     Type?: 'RESOURCE'|'MODULE'|'HOOK'|null,
     *     TypeName?: string|null,
     *     Arn?: string|null,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null,
     *     DeprecatedStatus?: 'LIVE'|'DEPRECATED'|null,
     *     PublisherId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
