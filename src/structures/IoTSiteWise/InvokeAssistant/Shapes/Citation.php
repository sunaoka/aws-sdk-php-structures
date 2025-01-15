<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\InvokeAssistant\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Reference|null $reference
 * @property Content|null $content
 */
class Citation extends Shape
{
    /**
     * @param array{
     *     reference?: Reference|null,
     *     content?: Content|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
