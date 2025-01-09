<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\InvokeAssistant\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $message
 */
class InternalFailureException extends Shape
{
    /**
     * @param array{message: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
