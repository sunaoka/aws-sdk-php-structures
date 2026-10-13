<?php

namespace Sunaoka\Aws\Structures\MediaConnect\DescribeFlowSourceMetadata\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<TransportStreamProgram> $Programs
 * @property int|null $TsId
 */
class TransportMediaInfo extends Shape
{
    /**
     * @param array{
     *     Programs: list<TransportStreamProgram>,
     *     TsId?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
