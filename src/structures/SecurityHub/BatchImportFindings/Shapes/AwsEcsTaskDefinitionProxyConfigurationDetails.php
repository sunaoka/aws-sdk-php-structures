<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ContainerName
 * @property list<AwsEcsTaskDefinitionProxyConfigurationProxyConfigurationPropertiesDetails> $ProxyConfigurationProperties
 * @property string $Type
 */
class AwsEcsTaskDefinitionProxyConfigurationDetails extends Shape
{
    /**
     * @param array{
     *     ContainerName?: string,
     *     ProxyConfigurationProperties?: list<AwsEcsTaskDefinitionProxyConfigurationProxyConfigurationPropertiesDetails>,
     *     Type?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
