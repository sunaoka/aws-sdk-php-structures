<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\ListConnectors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NONE'|'IAM' $authenticationType
 */
class KafkaClusterClientAuthenticationDescription extends Shape
{
    /**
     * @param array{authenticationType?: 'NONE'|'IAM'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
