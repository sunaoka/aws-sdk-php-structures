<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\CreateServiceFunction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $serviceArn
 * @property string $serviceFunctionId
 * @property string $name
 * @property string|null $description
 * @property 'PRIMARY'|'SUPPLEMENTAL' $criticality
 * @property int|null $resourceCount
 * @property 'AI_GENERATED'|'USER'|null $source
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class ServiceFunction extends Shape
{
    /**
     * @param array{
     *     serviceArn: string,
     *     serviceFunctionId: string,
     *     name: string,
     *     description?: string|null,
     *     criticality: 'PRIMARY'|'SUPPLEMENTAL',
     *     resourceCount?: int|null,
     *     source?: 'AI_GENERATED'|'USER'|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
