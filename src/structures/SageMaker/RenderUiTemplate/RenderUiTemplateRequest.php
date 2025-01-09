<?php

namespace Sunaoka\Aws\Structures\SageMaker\RenderUiTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\UiTemplate $UiTemplate
 * @property Shapes\RenderableTask $Task
 * @property string $RoleArn
 * @property string $HumanTaskUiArn
 */
class RenderUiTemplateRequest extends Request
{
    /**
     * @param array{
     *     UiTemplate?: Shapes\UiTemplate,
     *     Task: Shapes\RenderableTask,
     *     RoleArn: string,
     *     HumanTaskUiArn?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
