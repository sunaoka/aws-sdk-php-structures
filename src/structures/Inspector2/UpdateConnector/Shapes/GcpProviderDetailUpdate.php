<?php

namespace Sunaoka\Aws\Structures\Inspector2\UpdateConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $gcpRegions
 * @property GcpScopeConfigurationInput|null $scopeConfiguration
 * @property bool|null $autoInstallVMScanner
 */
class GcpProviderDetailUpdate extends Shape
{
    /**
     * @param array{
     *     gcpRegions?: list<string>|null,
     *     scopeConfiguration?: GcpScopeConfigurationInput|null,
     *     autoInstallVMScanner?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
