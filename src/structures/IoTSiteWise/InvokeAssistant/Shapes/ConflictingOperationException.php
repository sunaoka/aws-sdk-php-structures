<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\InvokeAssistant\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $message
 * @property string $resourceId
 * @property string $resourceArn
 */
class ConflictingOperationException extends Shape
{
    /**
     * @param array{
     *     message: string,
     *     resourceId: string,
     *     resourceArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
