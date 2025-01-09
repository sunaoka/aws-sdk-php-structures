<?php

namespace Sunaoka\Aws\Structures\Iot\GetTopicRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ruleName
 * @property string $sql
 * @property string $description
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property list<Action> $actions
 * @property bool $ruleDisabled
 * @property string $awsIotSqlVersion
 * @property Action $errorAction
 */
class TopicRule extends Shape
{
    /**
     * @param array{
     *     ruleName?: string,
     *     sql?: string,
     *     description?: string,
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     actions?: list<Action>,
     *     ruleDisabled?: bool,
     *     awsIotSqlVersion?: string,
     *     errorAction?: Action
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
