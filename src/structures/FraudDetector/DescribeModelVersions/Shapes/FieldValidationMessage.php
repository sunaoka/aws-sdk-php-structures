<?php

namespace Sunaoka\Aws\Structures\FraudDetector\DescribeModelVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $fieldName
 * @property string $identifier
 * @property string $title
 * @property string $content
 * @property string $type
 */
class FieldValidationMessage extends Shape
{
    /**
     * @param array{
     *     fieldName?: string,
     *     identifier?: string,
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
