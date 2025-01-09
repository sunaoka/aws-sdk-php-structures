<?php

namespace Sunaoka\Aws\Structures\RAM\GetResourcePolicies;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $resourceArns
 * @property string $principal
 * @property string $nextToken
 * @property int $maxResults
 */
class GetResourcePoliciesRequest extends Request
{
    /**
     * @param array{
     *     resourceArns: list<string>,
     *     principal?: string,
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
