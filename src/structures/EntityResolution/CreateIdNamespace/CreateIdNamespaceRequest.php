<?php

namespace Sunaoka\Aws\Structures\EntityResolution\CreateIdNamespace;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $description
 * @property list<Shapes\IdNamespaceIdMappingWorkflowProperties>|null $idMappingWorkflowProperties
 * @property string $idNamespaceName
 * @property list<Shapes\IdNamespaceInputSource>|null $inputSourceConfig
 * @property string|null $roleArn
 * @property array<string, string>|null $tags
 * @property 'SOURCE'|'TARGET' $type
 */
class CreateIdNamespaceRequest extends Request
{
    /**
     * @param array{
     *     description?: string|null,
     *     idMappingWorkflowProperties?: list<Shapes\IdNamespaceIdMappingWorkflowProperties>|null,
     *     idNamespaceName: string,
     *     inputSourceConfig?: list<Shapes\IdNamespaceInputSource>|null,
     *     roleArn?: string|null,
     *     tags?: array<string, string>|null,
     *     type: 'SOURCE'|'TARGET'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
