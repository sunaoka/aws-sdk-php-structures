<?php

namespace Sunaoka\Aws\Structures\Firehose\UpdateDestination\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Url
 * @property string $Name
 * @property string $AccessKey
 */
class HttpEndpointConfiguration extends Shape
{
    /**
     * @param array{
     *     Url: string,
     *     Name?: string,
     *     AccessKey?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
