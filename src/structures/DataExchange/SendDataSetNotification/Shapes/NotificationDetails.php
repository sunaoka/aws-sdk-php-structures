<?php

namespace Sunaoka\Aws\Structures\DataExchange\SendDataSetNotification\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DataUpdateRequestDetails|null $DataUpdate
 * @property DeprecationRequestDetails|null $Deprecation
 * @property SchemaChangeRequestDetails|null $SchemaChange
 */
class NotificationDetails extends Shape
{
    /**
     * @param array{
     *     DataUpdate?: DataUpdateRequestDetails|null,
     *     Deprecation?: DeprecationRequestDetails|null,
     *     SchemaChange?: SchemaChangeRequestDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
