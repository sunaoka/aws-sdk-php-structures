<?php

namespace Sunaoka\Aws\Structures\Ecs\DeregisterTaskDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'APPMESH'|null $type
 * @property string $containerName
 * @property list<KeyValuePair>|null $properties
 */
class ProxyConfiguration extends Shape
{
    /**
     * @param array{
     *     type?: 'APPMESH'|null,
     *     containerName: string,
     *     properties?: list<KeyValuePair>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
