<?php

namespace Sunaoka\Aws\Structures\S3Control\ListCallerAccessGrants;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property string|null $GrantScope
 * @property string|null $NextToken
 * @property int<0, 1000>|null $MaxResults
 * @property bool|null $AllowedByApplication
 */
class ListCallerAccessGrantsRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     GrantScope?: string|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<0, 1000>|null,
     *     AllowedByApplication?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
