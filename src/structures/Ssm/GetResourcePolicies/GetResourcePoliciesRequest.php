<?php

namespace Sunaoka\Aws\Structures\Ssm\GetResourcePolicies;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceArn
 * @property string $NextToken
 * @property int<1, 50> $MaxResults
 */
class GetResourcePoliciesRequest extends Request
{
    /**
     * @param array{
     *     ResourceArn: string,
     *     NextToken?: string,
     *     MaxResults?: int<1, 50>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
