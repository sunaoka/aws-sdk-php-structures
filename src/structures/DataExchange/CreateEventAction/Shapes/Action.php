<?php

namespace Sunaoka\Aws\Structures\DataExchange\CreateEventAction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AutoExportRevisionToS3RequestDetails $ExportRevisionToS3
 */
class Action extends Shape
{
    /**
     * @param array{ExportRevisionToS3?: AutoExportRevisionToS3RequestDetails} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
