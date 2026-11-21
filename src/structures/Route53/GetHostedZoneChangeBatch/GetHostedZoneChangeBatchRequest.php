<?php

namespace Sunaoka\Aws\Structures\Route53\GetHostedZoneChangeBatch;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $HostedZoneId
 * @property string $ChangeId
 */
class GetHostedZoneChangeBatchRequest extends Request
{
    /**
     * @param array{
     *     HostedZoneId: string,
     *     ChangeId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
