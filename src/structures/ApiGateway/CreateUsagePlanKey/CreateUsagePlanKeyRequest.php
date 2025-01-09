<?php

namespace Sunaoka\Aws\Structures\ApiGateway\CreateUsagePlanKey;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $usagePlanId
 * @property string $keyId
 * @property string $keyType
 */
class CreateUsagePlanKeyRequest extends Request
{
    /**
     * @param array{
     *     usagePlanId: string,
     *     keyId: string,
     *     keyType: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
