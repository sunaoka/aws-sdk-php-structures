<?php

namespace Sunaoka\Aws\Structures\VPCLattice\DeleteRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $listenerIdentifier
 * @property string $ruleIdentifier
 * @property string $serviceIdentifier
 */
class DeleteRuleRequest extends Request
{
    /**
     * @param array{
     *     listenerIdentifier: string,
     *     ruleIdentifier: string,
     *     serviceIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
