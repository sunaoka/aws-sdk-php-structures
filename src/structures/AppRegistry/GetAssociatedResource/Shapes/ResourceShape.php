<?php

namespace Sunaoka\Aws\Structures\AppRegistry\GetAssociatedResource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property string|null $arn
 * @property \Aws\Api\DateTimeResult|null $associationTime
 * @property ResourceIntegrations|null $integrations
 */
class ResourceShape extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     arn?: string|null,
     *     associationTime?: \Aws\Api\DateTimeResult|null,
     *     integrations?: ResourceIntegrations|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
