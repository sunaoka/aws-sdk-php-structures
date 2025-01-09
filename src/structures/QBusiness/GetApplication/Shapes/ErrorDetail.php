<?php

namespace Sunaoka\Aws\Structures\QBusiness\GetApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $errorMessage
 * @property 'InternalError'|'InvalidRequest'|'ResourceInactive'|'ResourceNotFound' $errorCode
 */
class ErrorDetail extends Shape
{
    /**
     * @param array{
     *     errorMessage?: string,
     *     errorCode?: 'InternalError'|'InvalidRequest'|'ResourceInactive'|'ResourceNotFound'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
