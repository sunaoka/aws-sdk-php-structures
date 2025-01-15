<?php

namespace Sunaoka\Aws\Structures\Ssm\GetResourcePolicies;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceArn
 * @property string|null $NextToken
 * @property int<1, 50>|null $MaxResults
 */
class GetResourcePoliciesRequest extends Request
{
    /**
     * @param array{
     *     ResourceArn: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 50>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
