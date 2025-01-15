<?php

namespace Sunaoka\Aws\Structures\SagemakerEdgeManager\GetDeployments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SHA1'|null $Type
 * @property string|null $Sum
 */
class Checksum extends Shape
{
    /**
     * @param array{
     *     Type?: 'SHA1'|null,
     *     Sum?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
