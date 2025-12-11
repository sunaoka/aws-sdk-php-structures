<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeExpressGatewayService;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $serviceArn
 * @property list<'TAGS'>|null $include
 */
class DescribeExpressGatewayServiceRequest extends Request
{
    /**
     * @param array{
     *     serviceArn: string,
     *     include?: list<'TAGS'>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
