<?php

namespace Sunaoka\Aws\Structures\Inspector2\UpdateConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ScopeConfigurationInput|null $vmScanning
 * @property ScopeConfigurationInput|null $containerImageScanning
 * @property ScopeConfigurationInput|null $serverlessScanning
 */
class AzureScopeConfigurationInput extends Shape
{
    /**
     * @param array{
     *     vmScanning?: ScopeConfigurationInput|null,
     *     containerImageScanning?: ScopeConfigurationInput|null,
     *     serverlessScanning?: ScopeConfigurationInput|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
