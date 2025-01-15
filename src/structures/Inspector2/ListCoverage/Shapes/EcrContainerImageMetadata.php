<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListCoverage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $imagePulledAt
 * @property list<string>|null $tags
 */
class EcrContainerImageMetadata extends Shape
{
    /**
     * @param array{
     *     imagePulledAt?: \Aws\Api\DateTimeResult|null,
     *     tags?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
