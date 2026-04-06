<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\ValidateTelemetryPipelineConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Message
 * @property string|null $Reason
 * @property array<string, string>|null $FieldMap
 */
class ValidationError extends Shape
{
    /**
     * @param array{
     *     Message?: string|null,
     *     Reason?: string|null,
     *     FieldMap?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
