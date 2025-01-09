<?php

namespace Sunaoka\Aws\Structures\AppRegistry\GetAssociatedResource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $arn
 * @property \Aws\Api\DateTimeResult $associationTime
 * @property ResourceIntegrations $integrations
 */
class Resource extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     arn?: string,
     *     associationTime?: \Aws\Api\DateTimeResult,
     *     integrations?: ResourceIntegrations
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
