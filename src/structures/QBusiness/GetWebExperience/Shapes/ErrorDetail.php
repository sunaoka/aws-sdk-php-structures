<?php

namespace Sunaoka\Aws\Structures\QBusiness\GetWebExperience\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $errorMessage
 * @property 'InternalError'|'InvalidRequest'|'ResourceInactive'|'ResourceNotFound'|null $errorCode
 */
class ErrorDetail extends Shape
{
    /**
     * @param array{
     *     errorMessage?: string|null,
     *     errorCode?: 'InternalError'|'InvalidRequest'|'ResourceInactive'|'ResourceNotFound'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
