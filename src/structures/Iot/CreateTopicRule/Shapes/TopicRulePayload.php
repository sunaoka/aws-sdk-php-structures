<?php

namespace Sunaoka\Aws\Structures\Iot\CreateTopicRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $sql
 * @property string|null $description
 * @property list<Action> $actions
 * @property bool|null $ruleDisabled
 * @property string|null $awsIotSqlVersion
 * @property Action|null $errorAction
 */
class TopicRulePayload extends Shape
{
    /**
     * @param array{
     *     sql: string,
     *     description?: string|null,
     *     actions: list<Action>,
     *     ruleDisabled?: bool|null,
     *     awsIotSqlVersion?: string|null,
     *     errorAction?: Action|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
