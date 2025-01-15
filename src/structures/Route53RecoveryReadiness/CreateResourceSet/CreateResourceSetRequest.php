<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryReadiness\CreateResourceSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceSetName
 * @property string $ResourceSetType
 * @property list<Shapes\Resource> $Resources
 * @property array<string, string>|null $Tags
 */
class CreateResourceSetRequest extends Request
{
    /**
     * @param array{
     *     ResourceSetName: string,
     *     ResourceSetType: string,
     *     Resources: list<Shapes\Resource>,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
