<?php

namespace Sunaoka\Aws\Structures\MPA\ListResourcePolicies;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceArn
 * @property int<1, 20>|null $MaxResults
 * @property string|null $NextToken
 */
class ListResourcePoliciesRequest extends Request
{
    /**
     * @param array{
     *     ResourceArn: string,
     *     MaxResults?: int<1, 20>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
