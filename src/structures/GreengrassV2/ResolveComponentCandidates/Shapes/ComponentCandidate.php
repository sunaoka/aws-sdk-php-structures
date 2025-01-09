<?php

namespace Sunaoka\Aws\Structures\GreengrassV2\ResolveComponentCandidates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $componentName
 * @property string $componentVersion
 * @property array<string, string> $versionRequirements
 */
class ComponentCandidate extends Shape
{
    /**
     * @param array{
     *     componentName?: string,
     *     componentVersion?: string,
     *     versionRequirements?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
