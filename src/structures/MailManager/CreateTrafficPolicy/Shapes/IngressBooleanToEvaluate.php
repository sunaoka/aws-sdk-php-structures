<?php

namespace Sunaoka\Aws\Structures\MailManager\CreateTrafficPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property IngressAnalysis|null $Analysis
 * @property IngressIsInAddressList|null $IsInAddressList
 */
class IngressBooleanToEvaluate extends Shape
{
    /**
     * @param array{
     *     Analysis?: IngressAnalysis|null,
     *     IsInAddressList?: IngressIsInAddressList|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
