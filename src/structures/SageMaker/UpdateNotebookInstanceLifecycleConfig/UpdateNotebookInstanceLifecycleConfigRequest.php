<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateNotebookInstanceLifecycleConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NotebookInstanceLifecycleConfigName
 * @property list<Shapes\NotebookInstanceLifecycleHook> $OnCreate
 * @property list<Shapes\NotebookInstanceLifecycleHook> $OnStart
 */
class UpdateNotebookInstanceLifecycleConfigRequest extends Request
{
    /**
     * @param array{
     *     NotebookInstanceLifecycleConfigName: string,
     *     OnCreate?: list<Shapes\NotebookInstanceLifecycleHook>,
     *     OnStart?: list<Shapes\NotebookInstanceLifecycleHook>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
