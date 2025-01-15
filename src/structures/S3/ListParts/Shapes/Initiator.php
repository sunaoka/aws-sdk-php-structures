<?php

namespace Sunaoka\Aws\Structures\S3\ListParts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ID
 * @property string|null $DisplayName
 */
class Initiator extends Shape
{
    /**
     * @param array{
     *     ID?: string|null,
     *     DisplayName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
