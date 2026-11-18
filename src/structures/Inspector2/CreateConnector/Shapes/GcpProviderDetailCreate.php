<?php

namespace Sunaoka\Aws\Structures\Inspector2\CreateConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $awsConfigConnectorArn
 * @property GcpScopeConfigurationInput $scopeConfiguration
 * @property list<string> $gcpRegions
 * @property bool|null $autoInstallVMScanner
 */
class GcpProviderDetailCreate extends Shape
{
    /**
     * @param array{
     *     awsConfigConnectorArn: string,
     *     scopeConfiguration: GcpScopeConfigurationInput,
     *     gcpRegions: list<string>,
     *     autoInstallVMScanner?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
