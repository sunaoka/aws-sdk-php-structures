<?php

namespace Sunaoka\Aws\Structures\Pinpoint\DeleteEventStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ApplicationId
 * @property string $DestinationStreamArn
 * @property string $ExternalId
 * @property string $LastModifiedDate
 * @property string $LastUpdatedBy
 * @property string $RoleArn
 */
class EventStream extends Shape
{
    /**
     * @param array{
     *     ApplicationId: string,
     *     DestinationStreamArn: string,
     *     ExternalId?: string,
     *     LastModifiedDate?: string,
     *     LastUpdatedBy?: string,
     *     RoleArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
