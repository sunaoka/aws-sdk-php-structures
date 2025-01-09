<?php

namespace Sunaoka\Aws\Structures\VPCLattice\DeregisterTargets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $targetGroupIdentifier
 * @property list<Shapes\Target> $targets
 */
class DeregisterTargetsRequest extends Request
{
    /**
     * @param array{
     *     targetGroupIdentifier: string,
     *     targets: list<Shapes\Target>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
