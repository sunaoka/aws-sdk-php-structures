<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateKeyRegistration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $KeyArn
 * @property int $StatusCode
 */
class SuccessfulKeyRegistrationEntry extends Shape
{
    /**
     * @param array{
     *     KeyArn: string,
     *     StatusCode: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
