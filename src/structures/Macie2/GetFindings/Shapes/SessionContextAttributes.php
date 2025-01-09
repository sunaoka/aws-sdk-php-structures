<?php

namespace Sunaoka\Aws\Structures\Macie2\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $creationDate
 * @property bool $mfaAuthenticated
 */
class SessionContextAttributes extends Shape
{
    /**
     * @param array{
     *     creationDate?: \Aws\Api\DateTimeResult,
     *     mfaAuthenticated?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
