<?php

namespace Sunaoka\Aws\Structures\MailManager\GetTrafficPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property IngressAnalysis|null $Analysis
 * @property 'RECIPIENT'|null $Attribute
 */
class IngressStringToEvaluate extends Shape
{
    /**
     * @param array{
     *     Analysis?: IngressAnalysis|null,
     *     Attribute?: 'RECIPIENT'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
