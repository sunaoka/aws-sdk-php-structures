<?php

namespace Sunaoka\Aws\Structures\CloudFront\GetRealtimeLogConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ARN
 * @property string $Name
 * @property int $SamplingRate
 * @property list<EndPoint> $EndPoints
 * @property list<string> $Fields
 */
class RealtimeLogConfig extends Shape
{
    /**
     * @param array{
     *     ARN: string,
     *     Name: string,
     *     SamplingRate: int,
     *     EndPoints: list<EndPoint>,
     *     Fields: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
