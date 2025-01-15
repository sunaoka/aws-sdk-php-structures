<?php

namespace Sunaoka\Aws\Structures\FraudDetector\DescribeModelVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $title
 * @property string|null $content
 * @property string|null $type
 */
class FileValidationMessage extends Shape
{
    /**
     * @param array{
     *     title?: string|null,
     *     content?: string|null,
     *     type?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
