<?php

namespace Sunaoka\Aws\Structures\Ecs\UpdateService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'TEXT'|'JSON' $format
 * @property 'DISABLED'|'ENABLED'|null $includeQueryParameters
 */
class ServiceConnectAccessLogConfiguration extends Shape
{
    /**
     * @param array{
     *     format: 'TEXT'|'JSON',
     *     includeQueryParameters?: 'DISABLED'|'ENABLED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
