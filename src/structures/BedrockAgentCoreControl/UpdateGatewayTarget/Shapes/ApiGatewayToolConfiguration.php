<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateGatewayTarget\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ApiGatewayToolOverride>|null $toolOverrides
 * @property list<ApiGatewayToolFilter> $toolFilters
 */
class ApiGatewayToolConfiguration extends Shape
{
    /**
     * @param array{
     *     toolOverrides?: list<ApiGatewayToolOverride>|null,
     *     toolFilters: list<ApiGatewayToolFilter>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
