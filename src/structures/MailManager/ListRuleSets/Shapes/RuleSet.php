<?php

namespace Sunaoka\Aws\Structures\MailManager\ListRuleSets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RuleSetId
 * @property string|null $RuleSetName
 * @property \Aws\Api\DateTimeResult|null $LastModificationDate
 */
class RuleSet extends Shape
{
    /**
     * @param array{
     *     RuleSetId?: string|null,
     *     RuleSetName?: string|null,
     *     LastModificationDate?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
