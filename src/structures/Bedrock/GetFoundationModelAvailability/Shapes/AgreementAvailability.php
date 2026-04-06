<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetFoundationModelAvailability\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AVAILABLE'|'PENDING'|'NOT_AVAILABLE'|'ERROR' $status
 * @property string|null $errorMessage
 */
class AgreementAvailability extends Shape
{
    /**
     * @param array{
     *     status: 'AVAILABLE'|'PENDING'|'NOT_AVAILABLE'|'ERROR',
     *     errorMessage?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
