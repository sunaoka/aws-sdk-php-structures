<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\InvokeWebSearch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DomainFilter|null $domainFilter
 * @property PublishedDateFilter|null $publishedDateFilter
 */
class WebSearchFilters extends Shape
{
    /**
     * @param array{
     *     domainFilter?: DomainFilter|null,
     *     publishedDateFilter?: PublishedDateFilter|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
