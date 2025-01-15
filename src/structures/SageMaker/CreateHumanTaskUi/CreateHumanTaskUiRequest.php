<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateHumanTaskUi;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $HumanTaskUiName
 * @property Shapes\UiTemplate $UiTemplate
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateHumanTaskUiRequest extends Request
{
    /**
     * @param array{
     *     HumanTaskUiName: string,
     *     UiTemplate: Shapes\UiTemplate,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
