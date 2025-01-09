<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\InvokeAssistant\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $message
 * @property list<Citation> $citations
 */
class InvocationOutput extends Shape
{
    /**
     * @param array{
     *     message?: string,
     *     citations?: list<Citation>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
