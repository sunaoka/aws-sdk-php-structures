<?php

namespace Sunaoka\Aws\Structures\Glue\GetSecurityConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property \Aws\Api\DateTimeResult $CreatedTimeStamp
 * @property EncryptionConfiguration $EncryptionConfiguration
 */
class SecurityConfiguration extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     CreatedTimeStamp?: \Aws\Api\DateTimeResult,
     *     EncryptionConfiguration?: EncryptionConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
