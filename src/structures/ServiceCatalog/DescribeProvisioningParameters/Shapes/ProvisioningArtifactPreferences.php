<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\DescribeProvisioningParameters\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $StackSetAccounts
 * @property list<string>|null $StackSetRegions
 */
class ProvisioningArtifactPreferences extends Shape
{
    /**
     * @param array{
     *     StackSetAccounts?: list<string>|null,
     *     StackSetRegions?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
