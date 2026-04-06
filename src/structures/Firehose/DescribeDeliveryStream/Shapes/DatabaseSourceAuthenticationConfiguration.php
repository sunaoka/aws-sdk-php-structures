<?php

namespace Sunaoka\Aws\Structures\Firehose\DescribeDeliveryStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SecretsManagerConfiguration $SecretsManagerConfiguration
 */
class DatabaseSourceAuthenticationConfiguration extends Shape
{
    /**
     * @param array{SecretsManagerConfiguration: SecretsManagerConfiguration} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
