<?php

namespace Sunaoka\Aws\Structures\VPCLattice\UpdateRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $serviceIdentifier
 * @property string $listenerIdentifier
 * @property string $ruleIdentifier
 * @property Shapes\RuleMatch|null $match
 * @property int<1, 2000>|null $priority
 * @property Shapes\RuleAction|null $action
 */
class UpdateRuleRequest extends Request
{
    /**
     * @param array{
     *     serviceIdentifier: string,
     *     listenerIdentifier: string,
     *     ruleIdentifier: string,
     *     match?: Shapes\RuleMatch|null,
     *     priority?: int<1, 2000>|null,
     *     action?: Shapes\RuleAction|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
