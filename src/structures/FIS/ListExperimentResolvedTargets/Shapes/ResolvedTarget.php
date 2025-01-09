<?php

namespace Sunaoka\Aws\Structures\FIS\ListExperimentResolvedTargets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $resourceType
 * @property string $targetName
 * @property array<string, string> $targetInformation
 */
class ResolvedTarget extends Shape
{
    /**
     * @param array{
     *     resourceType?: string,
     *     targetName?: string,
     *     targetInformation?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
