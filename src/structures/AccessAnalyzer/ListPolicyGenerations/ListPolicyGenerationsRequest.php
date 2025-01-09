<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\ListPolicyGenerations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $principalArn
 * @property int $maxResults
 * @property string $nextToken
 */
class ListPolicyGenerationsRequest extends Request
{
    /**
     * @param array{
     *     principalArn?: string,
     *     maxResults?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
