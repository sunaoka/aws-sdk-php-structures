<?php

namespace Sunaoka\Aws\Structures\RAM\GetResourcePolicies;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $resourceArns
 * @property string|null $principal
 * @property string|null $nextToken
 * @property int<1, 500>|null $maxResults
 */
class GetResourcePoliciesRequest extends Request
{
    /**
     * @param array{
     *     resourceArns: list<string>,
     *     principal?: string|null,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 500>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
