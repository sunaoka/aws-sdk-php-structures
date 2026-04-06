<?php

namespace Sunaoka\Aws\Structures\EntityResolution\ListIdNamespaces\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $idNamespaceName
 * @property string $idNamespaceArn
 * @property string|null $description
 * @property list<IdNamespaceIdMappingWorkflowMetadata>|null $idMappingWorkflowProperties
 * @property 'SOURCE'|'TARGET' $type
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class IdNamespaceSummary extends Shape
{
    /**
     * @param array{
     *     idNamespaceName: string,
     *     idNamespaceArn: string,
     *     description?: string|null,
     *     idMappingWorkflowProperties?: list<IdNamespaceIdMappingWorkflowMetadata>|null,
     *     type: 'SOURCE'|'TARGET',
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
