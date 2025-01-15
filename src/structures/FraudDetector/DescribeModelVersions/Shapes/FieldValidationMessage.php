<?php

namespace Sunaoka\Aws\Structures\FraudDetector\DescribeModelVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $fieldName
 * @property string|null $identifier
 * @property string|null $title
 * @property string|null $content
 * @property string|null $type
 */
class FieldValidationMessage extends Shape
{
    /**
     * @param array{
     *     fieldName?: string|null,
     *     identifier?: string|null,
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
