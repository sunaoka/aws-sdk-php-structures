<?php

namespace Sunaoka\Aws\Structures\MailManager\GetTrafficPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Analyzer
 * @property string $ResultField
 */
class IngressAnalysis extends Shape
{
    /**
     * @param array{
     *     Analyzer: string,
     *     ResultField: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
