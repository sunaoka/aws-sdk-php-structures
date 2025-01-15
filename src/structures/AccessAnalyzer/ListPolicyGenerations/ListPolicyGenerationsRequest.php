<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\ListPolicyGenerations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $principalArn
 * @property int<1, max>|null $maxResults
 * @property string|null $nextToken
 */
class ListPolicyGenerationsRequest extends Request
{
    /**
     * @param array{
     *     principalArn?: string|null,
     *     maxResults?: int<1, max>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
