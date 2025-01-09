<?php

namespace Sunaoka\Aws\Structures\DataExchange\SendDataSetNotification\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DataUpdateRequestDetails $DataUpdate
 * @property DeprecationRequestDetails $Deprecation
 * @property SchemaChangeRequestDetails $SchemaChange
 */
class NotificationDetails extends Shape
{
    /**
     * @param array{
     *     DataUpdate?: DataUpdateRequestDetails,
     *     Deprecation?: DeprecationRequestDetails,
     *     SchemaChange?: SchemaChangeRequestDetails
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
