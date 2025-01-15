<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ContainerName
 * @property list<AwsEcsTaskDefinitionProxyConfigurationProxyConfigurationPropertiesDetails>|null $ProxyConfigurationProperties
 * @property string|null $Type
 */
class AwsEcsTaskDefinitionProxyConfigurationDetails extends Shape
{
    /**
     * @param array{
     *     ContainerName?: string|null,
     *     ProxyConfigurationProperties?: list<AwsEcsTaskDefinitionProxyConfigurationProxyConfigurationPropertiesDetails>|null,
     *     Type?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
