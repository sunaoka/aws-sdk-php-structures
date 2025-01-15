<?php

namespace Sunaoka\Aws\Structures\XRay\PutTelemetryRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $TimeoutCount
 * @property int|null $ConnectionRefusedCount
 * @property int|null $HTTPCode4XXCount
 * @property int|null $HTTPCode5XXCount
 * @property int|null $UnknownHostCount
 * @property int|null $OtherCount
 */
class BackendConnectionErrors extends Shape
{
    /**
     * @param array{
     *     TimeoutCount?: int|null,
     *     ConnectionRefusedCount?: int|null,
     *     HTTPCode4XXCount?: int|null,
     *     HTTPCode5XXCount?: int|null,
     *     UnknownHostCount?: int|null,
     *     OtherCount?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
