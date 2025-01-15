<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateNotebookInstanceLifecycleConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NotebookInstanceLifecycleConfigName
 * @property list<Shapes\NotebookInstanceLifecycleHook>|null $OnCreate
 * @property list<Shapes\NotebookInstanceLifecycleHook>|null $OnStart
 */
class UpdateNotebookInstanceLifecycleConfigRequest extends Request
{
    /**
     * @param array{
     *     NotebookInstanceLifecycleConfigName: string,
     *     OnCreate?: list<Shapes\NotebookInstanceLifecycleHook>|null,
     *     OnStart?: list<Shapes\NotebookInstanceLifecycleHook>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
