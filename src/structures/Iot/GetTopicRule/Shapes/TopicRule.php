<?php

namespace Sunaoka\Aws\Structures\Iot\GetTopicRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ruleName
 * @property string|null $sql
 * @property string|null $description
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property list<Action>|null $actions
 * @property bool|null $ruleDisabled
 * @property string|null $awsIotSqlVersion
 * @property Action|null $errorAction
 */
class TopicRule extends Shape
{
    /**
     * @param array{
     *     ruleName?: string|null,
     *     sql?: string|null,
     *     description?: string|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     actions?: list<Action>|null,
     *     ruleDisabled?: bool|null,
     *     awsIotSqlVersion?: string|null,
     *     errorAction?: Action|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
