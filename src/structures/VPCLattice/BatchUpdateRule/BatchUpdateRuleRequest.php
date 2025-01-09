<?php

namespace Sunaoka\Aws\Structures\VPCLattice\BatchUpdateRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $listenerIdentifier
 * @property list<Shapes\RuleUpdate> $rules
 * @property string $serviceIdentifier
 */
class BatchUpdateRuleRequest extends Request
{
    /**
     * @param array{
     *     listenerIdentifier: string,
     *     rules: list<Shapes\RuleUpdate>,
     *     serviceIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
