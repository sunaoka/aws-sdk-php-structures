<?php

namespace Sunaoka\Aws\Structures\ivschat\ListLoggingConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $id
 * @property \Aws\Api\DateTimeResult $createTime
 * @property \Aws\Api\DateTimeResult $updateTime
 * @property string $name
 * @property DestinationConfiguration $destinationConfiguration
 * @property 'CREATING'|'CREATE_FAILED'|'DELETING'|'DELETE_FAILED'|'UPDATING'|'UPDATE_FAILED'|'ACTIVE' $state
 * @property array<string, string> $tags
 */
class LoggingConfigurationSummary extends Shape
{
    /**
     * @param array{
     *     arn?: string,
     *     id?: string,
     *     createTime?: \Aws\Api\DateTimeResult,
     *     updateTime?: \Aws\Api\DateTimeResult,
     *     name?: string,
     *     destinationConfiguration?: DestinationConfiguration,
     *     state?: 'CREATING'|'CREATE_FAILED'|'DELETING'|'DELETE_FAILED'|'UPDATING'|'UPDATE_FAILED'|'ACTIVE',
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
