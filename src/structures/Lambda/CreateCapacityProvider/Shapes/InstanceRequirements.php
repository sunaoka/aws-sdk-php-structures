<?php

namespace Sunaoka\Aws\Structures\Lambda\CreateCapacityProvider\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'x86_64'|'arm64'>|null $Architectures
 * @property list<string>|null $AllowedInstanceTypes
 * @property list<string>|null $ExcludedInstanceTypes
 */
class InstanceRequirements extends Shape
{
    /**
     * @param array{
     *     Architectures?: list<'x86_64'|'arm64'>|null,
     *     AllowedInstanceTypes?: list<string>|null,
     *     ExcludedInstanceTypes?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
