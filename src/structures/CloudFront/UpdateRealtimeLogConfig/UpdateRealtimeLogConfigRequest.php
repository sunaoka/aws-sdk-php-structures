<?php

namespace Sunaoka\Aws\Structures\CloudFront\UpdateRealtimeLogConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\EndPoint>|null $EndPoints
 * @property list<string>|null $Fields
 * @property string|null $Name
 * @property string|null $ARN
 * @property int|null $SamplingRate
 */
class UpdateRealtimeLogConfigRequest extends Request
{
    /**
     * @param array{
     *     EndPoints?: list<Shapes\EndPoint>|null,
     *     Fields?: list<string>|null,
     *     Name?: string|null,
     *     ARN?: string|null,
     *     SamplingRate?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
