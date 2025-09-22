<?php

namespace Sunaoka\Aws\Structures\LicenseManagerUserSubscriptions\ListInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $InstanceId
 * @property string $Status
 * @property list<string> $Products
 * @property string|null $LastStatusCheckDate
 * @property string|null $StatusMessage
 * @property string|null $OwnerAccountId
 * @property IdentityProvider|null $IdentityProvider
 */
class InstanceSummary extends Shape
{
    /**
     * @param array{
     *     InstanceId: string,
     *     Status: string,
     *     Products: list<string>,
     *     LastStatusCheckDate?: string|null,
     *     StatusMessage?: string|null,
     *     OwnerAccountId?: string|null,
     *     IdentityProvider?: IdentityProvider|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
