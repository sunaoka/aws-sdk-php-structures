<?php

namespace Sunaoka\Aws\Structures\FraudDetector\DescribeModelVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<FileValidationMessage>|null $fileLevelMessages
 * @property list<FieldValidationMessage>|null $fieldLevelMessages
 */
class DataValidationMetrics extends Shape
{
    /**
     * @param array{
     *     fileLevelMessages?: list<FileValidationMessage>|null,
     *     fieldLevelMessages?: list<FieldValidationMessage>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
