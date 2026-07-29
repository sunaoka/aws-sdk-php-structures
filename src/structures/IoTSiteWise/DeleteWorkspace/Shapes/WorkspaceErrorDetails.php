<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DeleteWorkspace\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'VALIDATION_ERROR'|'INTERNAL_FAILURE' $code
 * @property string $message
 */
class WorkspaceErrorDetails extends Shape
{
    /**
     * @param array{
     *     code: 'VALIDATION_ERROR'|'INTERNAL_FAILURE',
     *     message: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
