<?php

namespace Sunaoka\Aws\Structures\Ecs\CreateExpressGatewayService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $logGroup
 * @property string $logStreamPrefix
 */
class ExpressGatewayServiceAwsLogsConfiguration extends Shape
{
    /**
     * @param array{
     *     logGroup: string,
     *     logStreamPrefix: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
