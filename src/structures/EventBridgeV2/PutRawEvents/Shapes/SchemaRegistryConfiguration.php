<?php

namespace Sunaoka\Aws\Structures\EventBridgeV2\PutRawEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RegistryUri
 * @property ConfluentPublicRegistryConfiguration|null $ConfluentPublicRegistryConfiguration
 */
class SchemaRegistryConfiguration extends Shape
{
    /**
     * @param array{
     *     RegistryUri: string,
     *     ConfluentPublicRegistryConfiguration?: ConfluentPublicRegistryConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
