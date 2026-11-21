<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListInboundConnectorApplicationAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AccessControlApplicationArn
 * @property \Aws\Api\DateTimeResult $CreatedTime
 */
class InboundConnectorApplicationAssociationSummary extends Shape
{
    /**
     * @param array{
     *     AccessControlApplicationArn: string,
     *     CreatedTime: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
