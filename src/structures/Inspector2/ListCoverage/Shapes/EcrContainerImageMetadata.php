<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListCoverage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $imagePulledAt
 * @property list<string> $tags
 */
class EcrContainerImageMetadata extends Shape
{
    /**
     * @param array{
     *     imagePulledAt?: \Aws\Api\DateTimeResult,
     *     tags?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
