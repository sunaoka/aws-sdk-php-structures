<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizerAutomation\ListAccounts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Applied'|'Inherited'|'Direct'|'Default' $sourceType
 * @property string|null $sourceTargetId
 */
class OrganizationRuleModeSource extends Shape
{
    /**
     * @param array{
     *     sourceType: 'Applied'|'Inherited'|'Direct'|'Default',
     *     sourceTargetId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
