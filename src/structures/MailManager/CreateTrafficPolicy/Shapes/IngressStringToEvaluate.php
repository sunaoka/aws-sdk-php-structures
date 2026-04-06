<?php

namespace Sunaoka\Aws\Structures\MailManager\CreateTrafficPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'RECIPIENT'|null $Attribute
 */
class IngressStringToEvaluate extends Shape
{
    /**
     * @param array{Attribute?: 'RECIPIENT'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
