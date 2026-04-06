<?php

namespace Sunaoka\Aws\Structures\VPCLattice\UpdateListener;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\RuleAction $defaultAction
 * @property string $listenerIdentifier
 * @property string $serviceIdentifier
 */
class UpdateListenerRequest extends Request
{
    /**
     * @param array{
     *     defaultAction: Shapes\RuleAction,
     *     listenerIdentifier: string,
     *     serviceIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
