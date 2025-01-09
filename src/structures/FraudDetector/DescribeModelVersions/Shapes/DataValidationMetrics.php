<?php

namespace Sunaoka\Aws\Structures\FraudDetector\DescribeModelVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<FileValidationMessage> $fileLevelMessages
 * @property list<FieldValidationMessage> $fieldLevelMessages
 */
class DataValidationMetrics extends Shape
{
    /**
     * @param array{
     *     fileLevelMessages?: list<FileValidationMessage>,
     *     fieldLevelMessages?: list<FieldValidationMessage>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
