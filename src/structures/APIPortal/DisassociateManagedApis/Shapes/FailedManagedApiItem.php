<?php

namespace Sunaoka\Aws\Structures\APIPortal\DisassociateManagedApis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $managedApiId
 * @property 'MANAGED_API_NOT_FOUND'|'INTERNAL_ERROR' $errorCode
 * @property string $errorMessage
 */
class FailedManagedApiItem extends Shape
{
    /**
     * @param array{
     *     managedApiId: string,
     *     errorCode: 'MANAGED_API_NOT_FOUND'|'INTERNAL_ERROR',
     *     errorMessage: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
