<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\InvokeAssistant\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Reference $reference
 * @property Content $content
 */
class Citation extends Shape
{
    /**
     * @param array{
     *     reference?: Reference,
     *     content?: Content
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
