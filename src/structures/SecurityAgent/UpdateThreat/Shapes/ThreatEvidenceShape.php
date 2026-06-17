<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\UpdateThreat\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $packageId
 * @property string|null $path
 */
class ThreatEvidenceShape extends Shape
{
    /**
     * @param array{
     *     packageId?: string|null,
     *     path?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
