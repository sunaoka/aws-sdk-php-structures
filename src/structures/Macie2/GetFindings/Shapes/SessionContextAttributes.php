<?php

namespace Sunaoka\Aws\Structures\Macie2\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $creationDate
 * @property bool|null $mfaAuthenticated
 */
class SessionContextAttributes extends Shape
{
    /**
     * @param array{
     *     creationDate?: \Aws\Api\DateTimeResult|null,
     *     mfaAuthenticated?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
