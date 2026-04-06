<?php

namespace Sunaoka\Aws\Structures\VPCLattice\GetRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $listenerIdentifier
 * @property string $ruleIdentifier
 * @property string $serviceIdentifier
 */
class GetRuleRequest extends Request
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
