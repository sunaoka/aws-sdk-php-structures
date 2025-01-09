<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeHumanTaskUi\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Url
 * @property string $ContentSha256
 */
class UiTemplateInfo extends Shape
{
    /**
     * @param array{
     *     Url?: string,
     *     ContentSha256?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
