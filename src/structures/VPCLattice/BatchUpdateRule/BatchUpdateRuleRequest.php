<?php

namespace Sunaoka\Aws\Structures\VPCLattice\BatchUpdateRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $serviceIdentifier
 * @property string $listenerIdentifier
 * @property list<Shapes\RuleUpdate> $rules
 */
class BatchUpdateRuleRequest extends Request
{
    /**
     * @param array{
     *     serviceIdentifier: string,
     *     listenerIdentifier: string,
     *     rules: list<Shapes\RuleUpdate>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
