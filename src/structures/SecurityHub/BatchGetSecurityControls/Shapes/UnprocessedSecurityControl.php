<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchGetSecurityControls\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SecurityControlId
 * @property 'INVALID_INPUT'|'ACCESS_DENIED'|'NOT_FOUND'|'RESOURCE_NOT_FOUND'|'LIMIT_EXCEEDED' $ErrorCode
 * @property string|null $ErrorReason
 */
class UnprocessedSecurityControl extends Shape
{
    /**
     * @param array{
     *     SecurityControlId: string,
     *     ErrorCode: 'INVALID_INPUT'|'ACCESS_DENIED'|'NOT_FOUND'|'RESOURCE_NOT_FOUND'|'LIMIT_EXCEEDED',
     *     ErrorReason?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
