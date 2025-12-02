<?php

namespace Sunaoka\Aws\Structures\CleanRooms\StartProtectedJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $analysisTemplateArn
 */
class ProtectedJobParameters extends Shape
{
    /**
     * @param array{analysisTemplateArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
