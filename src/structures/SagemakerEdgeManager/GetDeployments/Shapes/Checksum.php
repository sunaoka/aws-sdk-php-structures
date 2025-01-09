<?php

namespace Sunaoka\Aws\Structures\SagemakerEdgeManager\GetDeployments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SHA1' $Type
 * @property string $Sum
 */
class Checksum extends Shape
{
    /**
     * @param array{
     *     Type?: 'SHA1',
     *     Sum?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
