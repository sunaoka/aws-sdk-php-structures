<?php

namespace Sunaoka\Aws\Structures\AmplifyBackend\CreateBackendAPI\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<BackendAPIAuthType> $AdditionalAuthTypes
 * @property string $ApiName
 * @property BackendAPIConflictResolution $ConflictResolution
 * @property BackendAPIAuthType $DefaultAuthType
 * @property string $Service
 * @property string $TransformSchema
 */
class BackendAPIResourceConfig extends Shape
{
    /**
     * @param array{
     *     AdditionalAuthTypes?: list<BackendAPIAuthType>,
     *     ApiName?: string,
     *     ConflictResolution?: BackendAPIConflictResolution,
     *     DefaultAuthType?: BackendAPIAuthType,
     *     Service?: string,
     *     TransformSchema?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
