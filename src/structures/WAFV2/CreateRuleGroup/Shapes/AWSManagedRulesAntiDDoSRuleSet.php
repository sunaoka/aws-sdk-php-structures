<?php

namespace Sunaoka\Aws\Structures\WAFV2\CreateRuleGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ClientSideActionConfig $ClientSideActionConfig
 * @property 'LOW'|'MEDIUM'|'HIGH'|null $SensitivityToBlock
 */
class AWSManagedRulesAntiDDoSRuleSet extends Shape
{
    /**
     * @param array{
     *     ClientSideActionConfig: ClientSideActionConfig,
     *     SensitivityToBlock?: 'LOW'|'MEDIUM'|'HIGH'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
