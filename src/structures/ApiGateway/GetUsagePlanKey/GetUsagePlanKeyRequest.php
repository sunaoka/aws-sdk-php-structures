<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetUsagePlanKey;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $usagePlanId
 * @property string $keyId
 */
class GetUsagePlanKeyRequest extends Request
{
    /**
     * @param array{
     *     usagePlanId: string,
     *     keyId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
