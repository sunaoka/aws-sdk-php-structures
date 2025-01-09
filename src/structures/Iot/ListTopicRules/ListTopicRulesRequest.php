<?php

namespace Sunaoka\Aws\Structures\Iot\ListTopicRules;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $topic
 * @property int<1, 10000> $maxResults
 * @property string $nextToken
 * @property bool $ruleDisabled
 */
class ListTopicRulesRequest extends Request
{
    /**
     * @param array{
     *     topic?: string,
     *     maxResults?: int<1, 10000>,
     *     nextToken?: string,
     *     ruleDisabled?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
