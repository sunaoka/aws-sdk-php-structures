<?php

namespace Sunaoka\Aws\Structures\VPCLattice\UpdateRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\RuleAction|null $action
 * @property string $listenerIdentifier
 * @property Shapes\RuleMatch|null $match
 * @property int<1, 100>|null $priority
 * @property string $ruleIdentifier
 * @property string $serviceIdentifier
 */
class UpdateRuleRequest extends Request
{
    /**
     * @param array{
     *     action?: Shapes\RuleAction|null,
     *     listenerIdentifier: string,
     *     match?: Shapes\RuleMatch|null,
     *     priority?: int<1, 100>|null,
     *     ruleIdentifier: string,
     *     serviceIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
