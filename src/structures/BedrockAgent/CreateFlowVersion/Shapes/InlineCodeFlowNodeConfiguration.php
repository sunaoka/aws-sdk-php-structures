<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreateFlowVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $code
 * @property 'Python_3' $language
 */
class InlineCodeFlowNodeConfiguration extends Shape
{
    /**
     * @param array{
     *     code: string,
     *     language: 'Python_3'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
