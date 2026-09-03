<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\StartBatchEvaluation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $serviceNames
 * @property list<string>|null $logGroupNames
 * @property list<string>|null $logGroupNamePrefixes
 * @property CloudWatchFilterConfig|null $filterConfig
 */
class CloudWatchLogsSource extends Shape
{
    /**
     * @param array{
     *     serviceNames: list<string>,
     *     logGroupNames?: list<string>|null,
     *     logGroupNamePrefixes?: list<string>|null,
     *     filterConfig?: CloudWatchFilterConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
