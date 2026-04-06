<?php

namespace Sunaoka\Aws\Structures\QConnect\QueryAssistant\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DataReference $reference
 * @property DataDetails $details
 */
class DataSummary extends Shape
{
    /**
     * @param array{
     *     reference: DataReference,
     *     details: DataDetails
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
