<?php

namespace Sunaoka\Aws\Structures\SageMaker\RenderUiTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\UiTemplate|null $UiTemplate
 * @property Shapes\RenderableTask $Task
 * @property string $RoleArn
 * @property string|null $HumanTaskUiArn
 */
class RenderUiTemplateRequest extends Request
{
    /**
     * @param array{
     *     UiTemplate?: Shapes\UiTemplate|null,
     *     Task: Shapes\RenderableTask,
     *     RoleArn: string,
     *     HumanTaskUiArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
