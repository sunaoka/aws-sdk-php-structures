<?php

namespace Sunaoka\Aws\Structures\QApps\GetQAppSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Document|null $value
 * @property string|null $submissionId
 * @property \Aws\Api\DateTimeResult|null $timestamp
 */
class Submission extends Shape
{
    /**
     * @param array{
     *     value?: Document|null,
     *     submissionId?: string|null,
     *     timestamp?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
