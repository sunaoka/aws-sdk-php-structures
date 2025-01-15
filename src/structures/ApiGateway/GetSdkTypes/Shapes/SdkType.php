<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetSdkTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property string|null $friendlyName
 * @property string|null $description
 * @property list<SdkConfigurationProperty>|null $configurationProperties
 */
class SdkType extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     friendlyName?: string|null,
     *     description?: string|null,
     *     configurationProperties?: list<SdkConfigurationProperty>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
