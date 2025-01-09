<?php

namespace Sunaoka\Aws\Structures\Inspector2\BatchGetFreeTrialInfo\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $accountId
 * @property 'ACCESS_DENIED'|'INTERNAL_ERROR' $code
 * @property string $message
 */
class FreeTrialInfoError extends Shape
{
    /**
     * @param array{
     *     accountId: string,
     *     code: 'ACCESS_DENIED'|'INTERNAL_ERROR',
     *     message: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
