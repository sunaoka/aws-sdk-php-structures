<?php

namespace Sunaoka\Aws\Structures\SageMaker\DeleteHumanTaskUi;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $HumanTaskUiName
 */
class DeleteHumanTaskUiRequest extends Request
{
    /**
     * @param array{HumanTaskUiName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
