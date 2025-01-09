<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvents\UpdateConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ClientID
 * @property string $ClientSecret
 */
class UpdateConnectionOAuthClientRequestParameters extends Shape
{
    /**
     * @param array{
     *     ClientID?: string,
     *     ClientSecret?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
