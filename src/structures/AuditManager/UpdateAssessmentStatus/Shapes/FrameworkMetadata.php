<?php

namespace Sunaoka\Aws\Structures\AuditManager\UpdateAssessmentStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $description
 * @property string $logo
 * @property string $complianceType
 */
class FrameworkMetadata extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     description?: string,
     *     logo?: string,
     *     complianceType?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
