<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\CreateCloudConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 */
class LambdaConfig extends Shape
{
    /**
     * @param array{arn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
