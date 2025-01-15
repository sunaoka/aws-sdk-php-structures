<?php

namespace Sunaoka\Aws\Structures\MailManager\ListRuleSets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $LastModificationDate
 * @property string|null $RuleSetId
 * @property string|null $RuleSetName
 */
class RuleSet extends Shape
{
    /**
     * @param array{
     *     LastModificationDate?: \Aws\Api\DateTimeResult|null,
     *     RuleSetId?: string|null,
     *     RuleSetName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
