<?php

namespace Sunaoka\Aws\Structures\S3\ListParts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ID
 * @property string $DisplayName
 */
class Initiator extends Shape
{
    /**
     * @param array{
     *     ID?: string,
     *     DisplayName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
