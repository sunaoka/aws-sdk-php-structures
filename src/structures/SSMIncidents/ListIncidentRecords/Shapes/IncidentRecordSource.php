<?php

namespace Sunaoka\Aws\Structures\SSMIncidents\ListIncidentRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $createdBy
 * @property string|null $invokedBy
 * @property string|null $resourceArn
 * @property string $source
 */
class IncidentRecordSource extends Shape
{
    /**
     * @param array{
     *     createdBy: string,
     *     invokedBy?: string|null,
     *     resourceArn?: string|null,
     *     source: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
