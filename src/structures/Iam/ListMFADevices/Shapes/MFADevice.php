<?php

namespace Sunaoka\Aws\Structures\Iam\ListMFADevices\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $UserName
 * @property string $SerialNumber
 * @property \Aws\Api\DateTimeResult $EnableDate
 */
class MFADevice extends Shape
{
    /**
     * @param array{
     *     UserName: string,
     *     SerialNumber: string,
     *     EnableDate: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
