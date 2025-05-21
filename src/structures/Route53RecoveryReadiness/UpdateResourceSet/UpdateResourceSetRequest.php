<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryReadiness\UpdateResourceSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceSetName
 * @property string $ResourceSetType
 * @property list<Shapes\ResourceShape> $Resources
 */
class UpdateResourceSetRequest extends Request
{
    /**
     * @param array{
     *     ResourceSetName: string,
     *     ResourceSetType: string,
     *     Resources: list<Shapes\ResourceShape>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
