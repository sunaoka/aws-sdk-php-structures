<?php

namespace Sunaoka\Aws\Structures\XRay\PutTelemetryRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $TimeoutCount
 * @property int $ConnectionRefusedCount
 * @property int $HTTPCode4XXCount
 * @property int $HTTPCode5XXCount
 * @property int $UnknownHostCount
 * @property int $OtherCount
 */
class BackendConnectionErrors extends Shape
{
    /**
     * @param array{
     *     TimeoutCount?: int,
     *     ConnectionRefusedCount?: int,
     *     HTTPCode4XXCount?: int,
     *     HTTPCode5XXCount?: int,
     *     UnknownHostCount?: int,
     *     OtherCount?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
