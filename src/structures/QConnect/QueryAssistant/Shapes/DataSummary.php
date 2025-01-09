<?php

namespace Sunaoka\Aws\Structures\QConnect\QueryAssistant\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DataDetails $details
 * @property DataReference $reference
 */
class DataSummary extends Shape
{
    /**
     * @param array{
     *     details: DataDetails,
     *     reference: DataReference
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
