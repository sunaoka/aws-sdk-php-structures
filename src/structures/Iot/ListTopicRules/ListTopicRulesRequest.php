<?php

namespace Sunaoka\Aws\Structures\Iot\ListTopicRules;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $topic
 * @property int<1, 10000>|null $maxResults
 * @property string|null $nextToken
 * @property bool|null $ruleDisabled
 */
class ListTopicRulesRequest extends Request
{
    /**
     * @param array{
     *     topic?: string|null,
     *     maxResults?: int<1, 10000>|null,
     *     nextToken?: string|null,
     *     ruleDisabled?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
