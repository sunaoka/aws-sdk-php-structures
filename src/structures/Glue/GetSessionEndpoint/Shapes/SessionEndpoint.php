<?php

namespace Sunaoka\Aws\Structures\Glue\GetSessionEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Url
 * @property string $AuthToken
 * @property \Aws\Api\DateTimeResult $AuthTokenExpirationTime
 */
class SessionEndpoint extends Shape
{
    /**
     * @param array{
     *     Url: string,
     *     AuthToken: string,
     *     AuthTokenExpirationTime: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
