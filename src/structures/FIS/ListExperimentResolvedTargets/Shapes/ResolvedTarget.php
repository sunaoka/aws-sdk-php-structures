<?php

namespace Sunaoka\Aws\Structures\FIS\ListExperimentResolvedTargets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $resourceType
 * @property string|null $targetName
 * @property array<string, string>|null $targetInformation
 */
class ResolvedTarget extends Shape
{
    /**
     * @param array{
     *     resourceType?: string|null,
     *     targetName?: string|null,
     *     targetInformation?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
