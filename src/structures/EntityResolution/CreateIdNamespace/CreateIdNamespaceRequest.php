<?php

namespace Sunaoka\Aws\Structures\EntityResolution\CreateIdNamespace;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $description
 * @property list<Shapes\IdNamespaceIdMappingWorkflowProperties> $idMappingWorkflowProperties
 * @property string $idNamespaceName
 * @property list<Shapes\IdNamespaceInputSource> $inputSourceConfig
 * @property string $roleArn
 * @property array<string, string> $tags
 * @property 'SOURCE'|'TARGET' $type
 */
class CreateIdNamespaceRequest extends Request
{
    /**
     * @param array{
     *     description?: string,
     *     idMappingWorkflowProperties?: list<Shapes\IdNamespaceIdMappingWorkflowProperties>,
     *     idNamespaceName: string,
     *     inputSourceConfig?: list<Shapes\IdNamespaceInputSource>,
     *     roleArn?: string,
     *     tags?: array<string, string>,
     *     type: 'SOURCE'|'TARGET'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
