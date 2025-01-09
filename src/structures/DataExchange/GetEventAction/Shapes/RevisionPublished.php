<?php

namespace Sunaoka\Aws\Structures\DataExchange\GetEventAction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DataSetId
 */
class RevisionPublished extends Shape
{
    /**
     * @param array{DataSetId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
