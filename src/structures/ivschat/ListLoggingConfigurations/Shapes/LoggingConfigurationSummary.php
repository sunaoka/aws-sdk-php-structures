<?php

namespace Sunaoka\Aws\Structures\ivschat\ListLoggingConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property string|null $id
 * @property \Aws\Api\DateTimeResult|null $createTime
 * @property \Aws\Api\DateTimeResult|null $updateTime
 * @property string|null $name
 * @property DestinationConfiguration|null $destinationConfiguration
 * @property 'CREATING'|'CREATE_FAILED'|'DELETING'|'DELETE_FAILED'|'UPDATING'|'UPDATE_FAILED'|'ACTIVE'|null $state
 * @property array<string, string>|null $tags
 */
class LoggingConfigurationSummary extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     id?: string|null,
     *     createTime?: \Aws\Api\DateTimeResult|null,
     *     updateTime?: \Aws\Api\DateTimeResult|null,
     *     name?: string|null,
     *     destinationConfiguration?: DestinationConfiguration|null,
     *     state?: 'CREATING'|'CREATE_FAILED'|'DELETING'|'DELETE_FAILED'|'UPDATING'|'UPDATE_FAILED'|'ACTIVE'|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
