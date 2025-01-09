<?php

namespace Sunaoka\Aws\Structures\AuditManager\GetAssessment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $serviceName
 */
class AWSService extends Shape
{
    /**
     * @param array{serviceName?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
