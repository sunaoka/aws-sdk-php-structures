<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetSdkType\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property string|null $friendlyName
 * @property string|null $description
 * @property bool|null $required
 * @property string|null $defaultValue
 */
class SdkConfigurationProperty extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     friendlyName?: string|null,
     *     description?: string|null,
     *     required?: bool|null,
     *     defaultValue?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
