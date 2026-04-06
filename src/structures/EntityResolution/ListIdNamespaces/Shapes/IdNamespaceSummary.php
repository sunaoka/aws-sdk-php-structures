<?php

namespace Sunaoka\Aws\Structures\EntityResolution\ListIdNamespaces\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string|null $description
 * @property list<IdNamespaceIdMappingWorkflowMetadata>|null $idMappingWorkflowProperties
 * @property string $idNamespaceArn
 * @property string $idNamespaceName
 * @property 'SOURCE'|'TARGET' $type
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class IdNamespaceSummary extends Shape
{
    /**
     * @param array{
     *     createdAt: \Aws\Api\DateTimeResult,
     *     description?: string|null,
     *     idMappingWorkflowProperties?: list<IdNamespaceIdMappingWorkflowMetadata>|null,
     *     idNamespaceArn: string,
     *     idNamespaceName: string,
     *     type: 'SOURCE'|'TARGET',
     *     updatedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
