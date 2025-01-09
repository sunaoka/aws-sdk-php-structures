<?php

namespace Sunaoka\Aws\Structures\Iot\CreateTopicRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $sql
 * @property string $description
 * @property list<Action> $actions
 * @property bool $ruleDisabled
 * @property string $awsIotSqlVersion
 * @property Action $errorAction
 */
class TopicRulePayload extends Shape
{
    /**
     * @param array{
     *     sql: string,
     *     description?: string,
     *     actions: list<Action>,
     *     ruleDisabled?: bool,
     *     awsIotSqlVersion?: string,
     *     errorAction?: Action
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
