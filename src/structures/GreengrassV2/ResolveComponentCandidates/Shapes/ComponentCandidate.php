<?php

namespace Sunaoka\Aws\Structures\GreengrassV2\ResolveComponentCandidates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $componentName
 * @property string|null $componentVersion
 * @property array<string, string>|null $versionRequirements
 */
class ComponentCandidate extends Shape
{
    /**
     * @param array{
     *     componentName?: string|null,
     *     componentVersion?: string|null,
     *     versionRequirements?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
