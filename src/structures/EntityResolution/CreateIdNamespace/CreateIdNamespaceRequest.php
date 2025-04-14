<?php

namespace Sunaoka\Aws\Structures\EntityResolution\CreateIdNamespace;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $idNamespaceName
 * @property string|null $description
 * @property list<Shapes\IdNamespaceInputSource>|null $inputSourceConfig
 * @property list<Shapes\IdNamespaceIdMappingWorkflowProperties>|null $idMappingWorkflowProperties
 * @property 'SOURCE'|'TARGET' $type
 * @property string|null $roleArn
 * @property array<string, string>|null $tags
 */
class CreateIdNamespaceRequest extends Request
{
    /**
     * @param array{
     *     idNamespaceName: string,
     *     description?: string|null,
     *     inputSourceConfig?: list<Shapes\IdNamespaceInputSource>|null,
     *     idMappingWorkflowProperties?: list<Shapes\IdNamespaceIdMappingWorkflowProperties>|null,
     *     type: 'SOURCE'|'TARGET',
     *     roleArn?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
