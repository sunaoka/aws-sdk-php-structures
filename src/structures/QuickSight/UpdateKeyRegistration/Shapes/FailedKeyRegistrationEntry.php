<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateKeyRegistration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $KeyArn
 * @property string $Message
 * @property int $StatusCode
 * @property bool $SenderFault
 */
class FailedKeyRegistrationEntry extends Shape
{
    /**
     * @param array{
     *     KeyArn?: string|null,
     *     Message: string,
     *     StatusCode: int,
     *     SenderFault: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
