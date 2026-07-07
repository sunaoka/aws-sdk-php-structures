<?php

namespace Sunaoka\Aws\Structures\Inspector2\UpdateConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $azureRegions
 * @property AzureScopeConfigurationInput|null $scopeConfiguration
 * @property bool|null $autoInstallVMScanner
 */
class AzureProviderDetailUpdate extends Shape
{
    /**
     * @param array{
     *     azureRegions?: list<string>|null,
     *     scopeConfiguration?: AzureScopeConfigurationInput|null,
     *     autoInstallVMScanner?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
