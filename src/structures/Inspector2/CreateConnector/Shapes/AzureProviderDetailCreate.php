<?php

namespace Sunaoka\Aws\Structures\Inspector2\CreateConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $awsConfigConnectorArn
 * @property AzureScopeConfigurationInput $scopeConfiguration
 * @property list<string> $azureRegions
 * @property bool|null $autoInstallVMScanner
 */
class AzureProviderDetailCreate extends Shape
{
    /**
     * @param array{
     *     awsConfigConnectorArn: string,
     *     scopeConfiguration: AzureScopeConfigurationInput,
     *     azureRegions: list<string>,
     *     autoInstallVMScanner?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
