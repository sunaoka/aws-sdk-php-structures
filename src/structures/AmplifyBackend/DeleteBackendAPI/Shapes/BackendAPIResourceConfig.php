<?php

namespace Sunaoka\Aws\Structures\AmplifyBackend\DeleteBackendAPI\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<BackendAPIAuthType>|null $AdditionalAuthTypes
 * @property string|null $ApiName
 * @property BackendAPIConflictResolution|null $ConflictResolution
 * @property BackendAPIAuthType|null $DefaultAuthType
 * @property string|null $Service
 * @property string|null $TransformSchema
 */
class BackendAPIResourceConfig extends Shape
{
    /**
     * @param array{
     *     AdditionalAuthTypes?: list<BackendAPIAuthType>|null,
     *     ApiName?: string|null,
     *     ConflictResolution?: BackendAPIConflictResolution|null,
     *     DefaultAuthType?: BackendAPIAuthType|null,
     *     Service?: string|null,
     *     TransformSchema?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
