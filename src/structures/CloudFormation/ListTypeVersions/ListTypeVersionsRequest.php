<?php

namespace Sunaoka\Aws\Structures\CloudFormation\ListTypeVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'RESOURCE'|'MODULE'|'HOOK' $Type
 * @property string $TypeName
 * @property string $Arn
 * @property int $MaxResults
 * @property string $NextToken
 * @property 'LIVE'|'DEPRECATED' $DeprecatedStatus
 * @property string $PublisherId
 */
class ListTypeVersionsRequest extends Request
{
    /**
     * @param array{
     *     Type?: 'RESOURCE'|'MODULE'|'HOOK',
     *     TypeName?: string,
     *     Arn?: string,
     *     MaxResults?: int,
     *     NextToken?: string,
     *     DeprecatedStatus?: 'LIVE'|'DEPRECATED',
     *     PublisherId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
