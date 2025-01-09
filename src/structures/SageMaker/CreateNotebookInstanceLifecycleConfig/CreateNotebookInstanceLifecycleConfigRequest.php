<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateNotebookInstanceLifecycleConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NotebookInstanceLifecycleConfigName
 * @property list<Shapes\NotebookInstanceLifecycleHook> $OnCreate
 * @property list<Shapes\NotebookInstanceLifecycleHook> $OnStart
 */
class CreateNotebookInstanceLifecycleConfigRequest extends Request
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
