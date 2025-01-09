<?php

namespace Sunaoka\Aws\Structures\MailManager\CreateTrafficPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'RECIPIENT' $Attribute
 */
class IngressStringToEvaluate extends Shape
{
    /**
     * @param array{Attribute?: 'RECIPIENT'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
