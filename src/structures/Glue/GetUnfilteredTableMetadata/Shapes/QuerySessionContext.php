<?php

namespace Sunaoka\Aws\Structures\Glue\GetUnfilteredTableMetadata\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $QueryId
 * @property \Aws\Api\DateTimeResult $QueryStartTime
 * @property string $ClusterId
 * @property string $QueryAuthorizationId
 * @property array<string, string> $AdditionalContext
 */
class QuerySessionContext extends Shape
{
    /**
     * @param array{
     *     QueryId?: string,
     *     QueryStartTime?: \Aws\Api\DateTimeResult,
     *     ClusterId?: string,
     *     QueryAuthorizationId?: string,
     *     AdditionalContext?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
