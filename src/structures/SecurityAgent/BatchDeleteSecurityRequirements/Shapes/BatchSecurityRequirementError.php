<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\BatchDeleteSecurityRequirements\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $securityRequirementName
 * @property string $code
 * @property string $message
 */
class BatchSecurityRequirementError extends Shape
{
    /**
     * @param array{
     *     securityRequirementName: string,
     *     code: string,
     *     message: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
