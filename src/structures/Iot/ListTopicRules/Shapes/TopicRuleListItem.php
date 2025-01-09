<?php

namespace Sunaoka\Aws\Structures\Iot\ListTopicRules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ruleArn
 * @property string $ruleName
 * @property string $topicPattern
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property bool $ruleDisabled
 */
class TopicRuleListItem extends Shape
{
    /**
     * @param array{
     *     ruleArn?: string,
     *     ruleName?: string,
     *     topicPattern?: string,
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     ruleDisabled?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
