<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\StartDatasetGeneration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $logGroupNames
 * @property list<string>|null $logGroupNamePrefixes
 * @property list<string> $serviceNames
 * @property \Aws\Api\DateTimeResult|null $startTime
 * @property \Aws\Api\DateTimeResult|null $endTime
 */
class CloudWatchLogsSourceConfig extends Shape
{
    /**
     * @param array{
     *     logGroupNames?: list<string>|null,
     *     logGroupNamePrefixes?: list<string>|null,
     *     serviceNames: list<string>,
     *     startTime?: \Aws\Api\DateTimeResult|null,
     *     endTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
