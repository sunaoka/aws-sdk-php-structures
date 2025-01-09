<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeHumanTaskUi;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $HumanTaskUiName
 */
class DescribeHumanTaskUiRequest extends Request
{
    /**
     * @param array{HumanTaskUiName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
