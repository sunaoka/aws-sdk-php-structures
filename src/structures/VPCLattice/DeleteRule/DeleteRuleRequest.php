<?php

namespace Sunaoka\Aws\Structures\VPCLattice\DeleteRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $serviceIdentifier
 * @property string $listenerIdentifier
 * @property string $ruleIdentifier
 */
class DeleteRuleRequest extends Request
{
    /**
     * @param array{
     *     serviceIdentifier: string,
     *     listenerIdentifier: string,
     *     ruleIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
