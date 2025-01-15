<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeHumanTaskUi\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Url
 * @property string|null $ContentSha256
 */
class UiTemplateInfo extends Shape
{
    /**
     * @param array{
     *     Url?: string|null,
     *     ContentSha256?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
