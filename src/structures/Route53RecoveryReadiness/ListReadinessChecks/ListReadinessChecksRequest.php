<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryReadiness\ListReadinessChecks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 1000>|null $MaxResults
 * @property string|null $NextToken
 */
class ListReadinessChecksRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<1, 1000>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
