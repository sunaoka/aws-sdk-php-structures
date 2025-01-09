<?php

namespace Sunaoka\Aws\Structures\S3Control\ListCallerAccessGrants;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property string $GrantScope
 * @property string $NextToken
 * @property int $MaxResults
 * @property bool $AllowedByApplication
 */
class ListCallerAccessGrantsRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     GrantScope?: string,
     *     NextToken?: string,
     *     MaxResults?: int,
     *     AllowedByApplication?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
