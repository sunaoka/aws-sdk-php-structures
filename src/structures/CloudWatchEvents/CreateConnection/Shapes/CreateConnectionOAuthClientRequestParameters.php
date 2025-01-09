<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvents\CreateConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ClientID
 * @property string $ClientSecret
 */
class CreateConnectionOAuthClientRequestParameters extends Shape
{
    /**
     * @param array{
     *     ClientID: string,
     *     ClientSecret: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
