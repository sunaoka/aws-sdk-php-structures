<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DetailedResultsLocation
 * @property ClassificationResult|null $Result
 */
class DataClassificationDetails extends Shape
{
    /**
     * @param array{
     *     DetailedResultsLocation?: string|null,
     *     Result?: ClassificationResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
