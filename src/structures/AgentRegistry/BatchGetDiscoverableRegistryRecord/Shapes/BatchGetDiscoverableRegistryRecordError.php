<?php

namespace Sunaoka\Aws\Structures\AgentRegistry\BatchGetDiscoverableRegistryRecord\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $registryId
 * @property string $recordId
 * @property 'RESOURCE_NOT_FOUND'|'ACCESS_DENIED'|'INTERNAL_ERROR' $errorCode
 * @property string|null $message
 */
class BatchGetDiscoverableRegistryRecordError extends Shape
{
    /**
     * @param array{
     *     registryId: string,
     *     recordId: string,
     *     errorCode: 'RESOURCE_NOT_FOUND'|'ACCESS_DENIED'|'INTERNAL_ERROR',
     *     message?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
