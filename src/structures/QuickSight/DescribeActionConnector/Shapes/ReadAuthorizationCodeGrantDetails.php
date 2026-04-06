<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeActionConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ClientId
 * @property string $TokenEndpoint
 * @property string $AuthorizationEndpoint
 */
class ReadAuthorizationCodeGrantDetails extends Shape
{
    /**
     * @param array{
     *     ClientId: string,
     *     TokenEndpoint: string,
     *     AuthorizationEndpoint: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
