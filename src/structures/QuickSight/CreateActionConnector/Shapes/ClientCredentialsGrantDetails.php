<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateActionConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ClientId
 * @property string $ClientSecret
 * @property string $TokenEndpoint
 */
class ClientCredentialsGrantDetails extends Shape
{
    /**
     * @param array{
     *     ClientId: string,
     *     ClientSecret: string,
     *     TokenEndpoint: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
