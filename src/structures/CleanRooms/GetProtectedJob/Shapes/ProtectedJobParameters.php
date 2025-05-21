<?php

namespace Sunaoka\Aws\Structures\CleanRooms\GetProtectedJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $analysisTemplateArn
 */
class ProtectedJobParameters extends Shape
{
    /**
     * @param array{analysisTemplateArn?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
