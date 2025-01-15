<?php

namespace Sunaoka\Aws\Structures\AuditManager\UpdateAssessmentStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property string|null $description
 * @property string|null $logo
 * @property string|null $complianceType
 */
class FrameworkMetadata extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     description?: string|null,
     *     logo?: string|null,
     *     complianceType?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
