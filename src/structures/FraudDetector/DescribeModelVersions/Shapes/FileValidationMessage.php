<?php

namespace Sunaoka\Aws\Structures\FraudDetector\DescribeModelVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $title
 * @property string $content
 * @property string $type
 */
class FileValidationMessage extends Shape
{
    /**
     * @param array{
     *     title?: string,
     *     content?: string,
     *     type?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
