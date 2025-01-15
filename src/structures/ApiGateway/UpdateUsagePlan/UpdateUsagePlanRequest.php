<?php

namespace Sunaoka\Aws\Structures\ApiGateway\UpdateUsagePlan;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $usagePlanId
 * @property list<Shapes\PatchOperation>|null $patchOperations
 */
class UpdateUsagePlanRequest extends Request
{
    /**
     * @param array{
     *     usagePlanId: string,
     *     patchOperations?: list<Shapes\PatchOperation>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
