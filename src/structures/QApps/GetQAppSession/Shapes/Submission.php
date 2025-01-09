<?php

namespace Sunaoka\Aws\Structures\QApps\GetQAppSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Document $value
 * @property string $submissionId
 * @property \Aws\Api\DateTimeResult $timestamp
 */
class Submission extends Shape
{
    /**
     * @param array{
     *     value?: Document,
     *     submissionId?: string,
     *     timestamp?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
