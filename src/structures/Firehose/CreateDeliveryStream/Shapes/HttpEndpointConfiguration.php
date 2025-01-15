<?php

namespace Sunaoka\Aws\Structures\Firehose\CreateDeliveryStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Url
 * @property string|null $Name
 * @property string|null $AccessKey
 */
class HttpEndpointConfiguration extends Shape
{
    /**
     * @param array{
     *     Url: string,
     *     Name?: string|null,
     *     AccessKey?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
