<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateNotebookInstanceLifecycleConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NotebookInstanceLifecycleConfigName
 * @property list<Shapes\NotebookInstanceLifecycleHook>|null $OnCreate
 * @property list<Shapes\NotebookInstanceLifecycleHook>|null $OnStart
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateNotebookInstanceLifecycleConfigRequest extends Request
{
    /**
     * @param array{
     *     NotebookInstanceLifecycleConfigName: string,
     *     OnCreate?: list<Shapes\NotebookInstanceLifecycleHook>|null,
     *     OnStart?: list<Shapes\NotebookInstanceLifecycleHook>|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
