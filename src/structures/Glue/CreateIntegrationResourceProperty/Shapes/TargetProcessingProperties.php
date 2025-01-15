<?php

namespace Sunaoka\Aws\Structures\Glue\CreateIntegrationResourceProperty\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RoleArn
 * @property string|null $KmsArn
 * @property string|null $ConnectionName
 * @property string|null $EventBusArn
 */
class TargetProcessingProperties extends Shape
{
    /**
     * @param array{
     *     RoleArn?: string|null,
     *     KmsArn?: string|null,
     *     ConnectionName?: string|null,
     *     EventBusArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
