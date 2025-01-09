<?php

namespace Sunaoka\Aws\Structures\EntityResolution\UpdateIdNamespace;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $description
 * @property list<Shapes\IdNamespaceIdMappingWorkflowProperties> $idMappingWorkflowProperties
 * @property string $idNamespaceName
 * @property list<Shapes\IdNamespaceInputSource> $inputSourceConfig
 * @property string $roleArn
 */
class UpdateIdNamespaceRequest extends Request
{
    /**
     * @param array{
     *     description?: string,
     *     idMappingWorkflowProperties?: list<Shapes\IdNamespaceIdMappingWorkflowProperties>,
     *     idNamespaceName: string,
     *     inputSourceConfig?: list<Shapes\IdNamespaceInputSource>,
     *     roleArn?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
