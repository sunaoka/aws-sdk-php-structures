<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetSdkTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $friendlyName
 * @property string $description
 * @property list<SdkConfigurationProperty> $configurationProperties
 */
class SdkType extends Shape
{
    /**
     * @param array{
     *     id?: string,
     *     friendlyName?: string,
     *     description?: string,
     *     configurationProperties?: list<SdkConfigurationProperty>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
