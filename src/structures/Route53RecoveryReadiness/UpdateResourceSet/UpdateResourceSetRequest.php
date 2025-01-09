<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryReadiness\UpdateResourceSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceSetName
 * @property string $ResourceSetType
 * @property list<Shapes\Resource> $Resources
 */
class UpdateResourceSetRequest extends Request
{
    /**
     * @param array{
     *     ResourceSetName: string,
     *     ResourceSetType: string,
     *     Resources: list<Shapes\Resource>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
