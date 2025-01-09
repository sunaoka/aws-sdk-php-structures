<?php

namespace Sunaoka\Aws\Structures\SSMIncidents\ListIncidentRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $createdBy
 * @property string $invokedBy
 * @property string $resourceArn
 * @property string $source
 */
class IncidentRecordSource extends Shape
{
    /**
     * @param array{
     *     createdBy: string,
     *     invokedBy?: string,
     *     resourceArn?: string,
     *     source: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
