<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DetailedResultsLocation
 * @property ClassificationResult $Result
 */
class DataClassificationDetails extends Shape
{
    /**
     * @param array{
     *     DetailedResultsLocation?: string,
     *     Result?: ClassificationResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
