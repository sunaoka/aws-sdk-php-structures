<?php

namespace Sunaoka\Aws\Structures\Pinpoint\PutEventStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ApplicationId
 * @property string $DestinationStreamArn
 * @property string|null $ExternalId
 * @property string|null $LastModifiedDate
 * @property string|null $LastUpdatedBy
 * @property string $RoleArn
 */
class EventStream extends Shape
{
    /**
     * @param array{
     *     ApplicationId: string,
     *     DestinationStreamArn: string,
     *     ExternalId?: string|null,
     *     LastModifiedDate?: string|null,
     *     LastUpdatedBy?: string|null,
     *     RoleArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
