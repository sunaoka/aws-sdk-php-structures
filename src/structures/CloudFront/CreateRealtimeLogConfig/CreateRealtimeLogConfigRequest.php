<?php

namespace Sunaoka\Aws\Structures\CloudFront\CreateRealtimeLogConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\EndPoint> $EndPoints
 * @property list<string> $Fields
 * @property string $Name
 * @property int $SamplingRate
 */
class CreateRealtimeLogConfigRequest extends Request
{
    /**
     * @param array{
     *     EndPoints: list<Shapes\EndPoint>,
     *     Fields: list<string>,
     *     Name: string,
     *     SamplingRate: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
