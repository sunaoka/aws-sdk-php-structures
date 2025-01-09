<?php

namespace Sunaoka\Aws\Structures\CloudFront\UpdateRealtimeLogConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\EndPoint> $EndPoints
 * @property list<string> $Fields
 * @property string $Name
 * @property string $ARN
 * @property int $SamplingRate
 */
class UpdateRealtimeLogConfigRequest extends Request
{
    /**
     * @param array{
     *     EndPoints?: list<Shapes\EndPoint>,
     *     Fields?: list<string>,
     *     Name?: string,
     *     ARN?: string,
     *     SamplingRate?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
