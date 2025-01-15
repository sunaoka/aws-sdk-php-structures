<?php

namespace Sunaoka\Aws\Structures\Ses\CreateReceiptRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'RuleSet' $Scope
 * @property string|null $TopicArn
 */
class StopAction extends Shape
{
    /**
     * @param array{
     *     Scope: 'RuleSet',
     *     TopicArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
