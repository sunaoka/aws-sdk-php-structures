<?php

namespace Sunaoka\Aws\Structures\HealthLake\UpdateProfileWithAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'InternalServerException'|'ResourceNotFoundException'|'ValidationException'|'AccessDeniedException'|'ThrottlingException' $Error
 * @property string $Message
 */
class ErrorEvent extends Shape
{
    /**
     * @param array{
     *     Error: 'InternalServerException'|'ResourceNotFoundException'|'ValidationException'|'AccessDeniedException'|'ThrottlingException',
     *     Message: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
