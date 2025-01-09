<?php

namespace Sunaoka\Aws\Structures\ApiGatewayManagementApi\GetConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SourceIp
 * @property string $UserAgent
 */
class Identity extends Shape
{
    /**
     * @param array{
     *     SourceIp: string,
     *     UserAgent: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
