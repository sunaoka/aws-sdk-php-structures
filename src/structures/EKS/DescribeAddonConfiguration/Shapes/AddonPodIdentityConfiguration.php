<?php

namespace Sunaoka\Aws\Structures\EKS\DescribeAddonConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $serviceAccount
 * @property list<string> $recommendedManagedPolicies
 */
class AddonPodIdentityConfiguration extends Shape
{
    /**
     * @param array{
     *     serviceAccount?: string,
     *     recommendedManagedPolicies?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
