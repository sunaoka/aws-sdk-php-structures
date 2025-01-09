<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\DescribeProvisioningParameters\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $StackSetAccounts
 * @property list<string> $StackSetRegions
 */
class ProvisioningArtifactPreferences extends Shape
{
    /**
     * @param array{
     *     StackSetAccounts?: list<string>,
     *     StackSetRegions?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
