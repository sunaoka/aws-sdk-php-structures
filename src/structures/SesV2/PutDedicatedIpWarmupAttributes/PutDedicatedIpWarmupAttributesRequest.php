<?php

namespace Sunaoka\Aws\Structures\SesV2\PutDedicatedIpWarmupAttributes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Ip
 * @property int $WarmupPercentage
 */
class PutDedicatedIpWarmupAttributesRequest extends Request
{
    /**
     * @param array{
     *     Ip: string,
     *     WarmupPercentage: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
