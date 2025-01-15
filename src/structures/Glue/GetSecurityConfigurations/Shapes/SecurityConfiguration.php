<?php

namespace Sunaoka\Aws\Structures\Glue\GetSecurityConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property \Aws\Api\DateTimeResult|null $CreatedTimeStamp
 * @property EncryptionConfiguration|null $EncryptionConfiguration
 */
class SecurityConfiguration extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     CreatedTimeStamp?: \Aws\Api\DateTimeResult|null,
     *     EncryptionConfiguration?: EncryptionConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
