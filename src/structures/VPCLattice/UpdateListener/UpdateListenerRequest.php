<?php

namespace Sunaoka\Aws\Structures\VPCLattice\UpdateListener;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $serviceIdentifier
 * @property string $listenerIdentifier
 * @property Shapes\RuleAction $defaultAction
 */
class UpdateListenerRequest extends Request
{
    /**
     * @param array{
     *     serviceIdentifier: string,
     *     listenerIdentifier: string,
     *     defaultAction: Shapes\RuleAction
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
