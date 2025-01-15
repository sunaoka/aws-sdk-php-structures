<?php

namespace Sunaoka\Aws\Structures\Glue\GetUnfilteredPartitionsMetadata\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $QueryId
 * @property \Aws\Api\DateTimeResult|null $QueryStartTime
 * @property string|null $ClusterId
 * @property string|null $QueryAuthorizationId
 * @property array<string, string>|null $AdditionalContext
 */
class QuerySessionContext extends Shape
{
    /**
     * @param array{
     *     QueryId?: string|null,
     *     QueryStartTime?: \Aws\Api\DateTimeResult|null,
     *     ClusterId?: string|null,
     *     QueryAuthorizationId?: string|null,
     *     AdditionalContext?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
