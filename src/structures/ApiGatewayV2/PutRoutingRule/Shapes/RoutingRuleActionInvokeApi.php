<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\PutRoutingRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ApiId
 * @property string $Stage
 * @property bool|null $StripBasePath
 */
class RoutingRuleActionInvokeApi extends Shape
{
    /**
     * @param array{
     *     ApiId: string,
     *     Stage: string,
     *     StripBasePath?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
