<?php

namespace Sunaoka\Aws\Structures\AuditManager\UpdateAssessmentStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $serviceName
 */
class AWSService extends Shape
{
    /**
     * @param array{serviceName?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
