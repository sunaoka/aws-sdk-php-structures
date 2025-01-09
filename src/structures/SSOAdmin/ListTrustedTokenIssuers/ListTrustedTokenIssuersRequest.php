<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\ListTrustedTokenIssuers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceArn
 * @property int $MaxResults
 * @property string $NextToken
 */
class ListTrustedTokenIssuersRequest extends Request
{
    /**
     * @param array{
     *     InstanceArn: string,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
