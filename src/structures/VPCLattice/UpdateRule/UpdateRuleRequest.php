<?php

namespace Sunaoka\Aws\Structures\VPCLattice\UpdateRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\RuleAction $action
 * @property string $listenerIdentifier
 * @property Shapes\RuleMatch $match
 * @property int $priority
 * @property string $ruleIdentifier
 * @property string $serviceIdentifier
 */
class UpdateRuleRequest extends Request
{
    /**
     * @param array{
     *     action?: Shapes\RuleAction,
     *     listenerIdentifier: string,
     *     match?: Shapes\RuleMatch,
     *     priority?: int,
     *     ruleIdentifier: string,
     *     serviceIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
