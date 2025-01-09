<?php

namespace Sunaoka\Aws\Structures\Connect\BatchPutContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Endpoint $SystemEndpoint
 * @property Endpoint $CustomerEndpoint
 * @property string $RequestIdentifier
 * @property string $QueueId
 * @property array<string, string> $Attributes
 * @property Campaign $Campaign
 */
class ContactDataRequest extends Shape
{
    /**
     * @param array{
     *     SystemEndpoint?: Endpoint,
     *     CustomerEndpoint?: Endpoint,
     *     RequestIdentifier?: string,
     *     QueueId?: string,
     *     Attributes?: array<string, string>,
     *     Campaign?: Campaign
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
