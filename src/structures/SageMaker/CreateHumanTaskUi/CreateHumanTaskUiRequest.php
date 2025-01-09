<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateHumanTaskUi;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $HumanTaskUiName
 * @property Shapes\UiTemplate $UiTemplate
 * @property list<Shapes\Tag> $Tags
 */
class CreateHumanTaskUiRequest extends Request
{
    /**
     * @param array{
     *     HumanTaskUiName: string,
     *     UiTemplate: Shapes\UiTemplate,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
