<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\InvokeAssistant\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $message
 * @property list<Citation>|null $citations
 */
class InvocationOutput extends Shape
{
    /**
     * @param array{
     *     message?: string|null,
     *     citations?: list<Citation>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
