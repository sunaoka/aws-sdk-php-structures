<?php

namespace Sunaoka\Aws\Structures\Ecs\DeleteTaskDefinitions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'APPMESH' $type
 * @property string $containerName
 * @property list<KeyValuePair> $properties
 */
class ProxyConfiguration extends Shape
{
    /**
     * @param array{
     *     type?: 'APPMESH',
     *     containerName: string,
     *     properties?: list<KeyValuePair>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
