<?php

namespace Sunaoka\Aws\Structures\Connect\BatchPutContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Endpoint|null $SystemEndpoint
 * @property Endpoint|null $CustomerEndpoint
 * @property string|null $RequestIdentifier
 * @property string|null $QueueId
 * @property array<string, string>|null $Attributes
 * @property Campaign|null $Campaign
 */
class ContactDataRequest extends Shape
{
    /**
     * @param array{
     *     SystemEndpoint?: Endpoint|null,
     *     CustomerEndpoint?: Endpoint|null,
     *     RequestIdentifier?: string|null,
     *     QueueId?: string|null,
     *     Attributes?: array<string, string>|null,
     *     Campaign?: Campaign|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
