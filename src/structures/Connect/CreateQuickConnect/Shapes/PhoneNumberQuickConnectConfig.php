<?php

namespace Sunaoka\Aws\Structures\Connect\CreateQuickConnect\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PhoneNumber
 */
class PhoneNumberQuickConnectConfig extends Shape
{
    /**
     * @param array{PhoneNumber: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
