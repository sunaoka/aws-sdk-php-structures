<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeEncryptionConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'HEALTHY'|'UNHEALTHY'|null $configurationStatus
 * @property string|null $errorCode
 * @property string|null $errorMessage
 */
class ConfigurationDetails extends Shape
{
    /**
     * @param array{
     *     configurationStatus?: 'HEALTHY'|'UNHEALTHY'|null,
     *     errorCode?: string|null,
     *     errorMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
