<?php

namespace Sunaoka\Aws\Structures\VPCLattice\RegisterTargets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $targetGroupIdentifier
 * @property list<Shapes\Target> $targets
 */
class RegisterTargetsRequest extends Request
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
