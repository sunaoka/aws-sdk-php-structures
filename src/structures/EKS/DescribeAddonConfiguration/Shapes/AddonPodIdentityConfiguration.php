<?php

namespace Sunaoka\Aws\Structures\EKS\DescribeAddonConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $serviceAccount
 * @property list<string>|null $recommendedManagedPolicies
 */
class AddonPodIdentityConfiguration extends Shape
{
    /**
     * @param array{
     *     serviceAccount?: string|null,
     *     recommendedManagedPolicies?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
