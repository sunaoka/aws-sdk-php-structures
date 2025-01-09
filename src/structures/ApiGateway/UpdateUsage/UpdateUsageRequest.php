<?php

namespace Sunaoka\Aws\Structures\ApiGateway\UpdateUsage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $usagePlanId
 * @property string $keyId
 * @property list<Shapes\PatchOperation> $patchOperations
 */
class UpdateUsageRequest extends Request
{
    /**
     * @param array{
     *     usagePlanId: string,
     *     keyId: string,
     *     patchOperations?: list<Shapes\PatchOperation>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
