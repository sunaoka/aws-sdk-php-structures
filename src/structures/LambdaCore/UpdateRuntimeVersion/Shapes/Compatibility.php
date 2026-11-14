<?php

namespace Sunaoka\Aws\Structures\LambdaCore\UpdateRuntimeVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'RuntimeAPI'>|null $IntegrationModels
 * @property list<'x86_64'|'arm64'>|null $Architectures
 * @property 'Supported'|'NotSupported'|null $ManagedInstances
 */
class Compatibility extends Shape
{
    /**
     * @param array{
     *     IntegrationModels?: list<'RuntimeAPI'>|null,
     *     Architectures?: list<'x86_64'|'arm64'>|null,
     *     ManagedInstances?: 'Supported'|'NotSupported'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
