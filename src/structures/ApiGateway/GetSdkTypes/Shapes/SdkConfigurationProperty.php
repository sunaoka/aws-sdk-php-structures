<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetSdkTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $friendlyName
 * @property string $description
 * @property bool $required
 * @property string $defaultValue
 */
class SdkConfigurationProperty extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     friendlyName?: string,
     *     description?: string,
     *     required?: bool,
     *     defaultValue?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
