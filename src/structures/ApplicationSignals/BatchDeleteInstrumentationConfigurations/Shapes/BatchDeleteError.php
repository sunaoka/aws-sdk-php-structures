<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\BatchDeleteInstrumentationConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ResourceArn
 * @property 'ResourceNotFoundException'|'AccessDeniedException'|'InternalServiceException' $Code
 * @property string $Message
 */
class BatchDeleteError extends Shape
{
    /**
     * @param array{
     *     ResourceArn: string,
     *     Code: 'ResourceNotFoundException'|'AccessDeniedException'|'InternalServiceException',
     *     Message: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
