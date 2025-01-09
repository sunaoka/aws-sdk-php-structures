<?php

namespace Sunaoka\Aws\Structures\Glue\CreateIntegrationResourceProperty\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RoleArn
 * @property string $KmsArn
 * @property string $ConnectionName
 * @property string $EventBusArn
 */
class TargetProcessingProperties extends Shape
{
    /**
     * @param array{
     *     RoleArn?: string,
     *     KmsArn?: string,
     *     ConnectionName?: string,
     *     EventBusArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
