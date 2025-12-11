<?php

namespace Sunaoka\Aws\Structures\NovaAct\CreateWorkflowDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string|null $description
 * @property Shapes\WorkflowExportConfig|null $exportConfig
 * @property string|null $clientToken
 */
class CreateWorkflowDefinitionRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     description?: string|null,
     *     exportConfig?: Shapes\WorkflowExportConfig|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
