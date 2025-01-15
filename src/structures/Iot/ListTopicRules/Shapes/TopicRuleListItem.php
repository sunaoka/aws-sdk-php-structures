<?php

namespace Sunaoka\Aws\Structures\Iot\ListTopicRules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ruleArn
 * @property string|null $ruleName
 * @property string|null $topicPattern
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property bool|null $ruleDisabled
 */
class TopicRuleListItem extends Shape
{
    /**
     * @param array{
     *     ruleArn?: string|null,
     *     ruleName?: string|null,
     *     topicPattern?: string|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     ruleDisabled?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
