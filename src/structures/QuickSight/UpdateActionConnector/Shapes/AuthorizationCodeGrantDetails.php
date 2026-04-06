<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateActionConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ClientId
 * @property string $ClientSecret
 * @property string $TokenEndpoint
 * @property string $AuthorizationEndpoint
 */
class AuthorizationCodeGrantDetails extends Shape
{
    /**
     * @param array{
     *     ClientId: string,
     *     ClientSecret: string,
     *     TokenEndpoint: string,
     *     AuthorizationEndpoint: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
