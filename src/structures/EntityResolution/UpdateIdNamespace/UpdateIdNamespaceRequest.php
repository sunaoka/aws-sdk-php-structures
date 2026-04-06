<?php

namespace Sunaoka\Aws\Structures\EntityResolution\UpdateIdNamespace;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $idNamespaceName
 * @property string|null $description
 * @property list<Shapes\IdNamespaceInputSource>|null $inputSourceConfig
 * @property list<Shapes\IdNamespaceIdMappingWorkflowProperties>|null $idMappingWorkflowProperties
 * @property string|null $roleArn
 */
class UpdateIdNamespaceRequest extends Request
{
    /**
     * @param array{
     *     idNamespaceName: string,
     *     description?: string|null,
     *     inputSourceConfig?: list<Shapes\IdNamespaceInputSource>|null,
     *     idMappingWorkflowProperties?: list<Shapes\IdNamespaceIdMappingWorkflowProperties>|null,
     *     roleArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
