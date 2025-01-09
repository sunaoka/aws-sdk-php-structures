<?php

namespace Sunaoka\Aws\Structures\MailManager\ListRuleSets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $LastModificationDate
 * @property string $RuleSetId
 * @property string $RuleSetName
 */
class RuleSet extends Shape
{
    /**
     * @param array{
     *     LastModificationDate?: \Aws\Api\DateTimeResult,
     *     RuleSetId?: string,
     *     RuleSetName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
