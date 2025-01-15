<?php

namespace Sunaoka\Aws\Structures\EventBridge\UpdateConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ClientID
 * @property string|null $ClientSecret
 */
class UpdateConnectionOAuthClientRequestParameters extends Shape
{
    /**
     * @param array{
     *     ClientID?: string|null,
     *     ClientSecret?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
