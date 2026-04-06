<?php

namespace Sunaoka\Aws\Structures\ivschat\ListLoggingConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property \Aws\Api\DateTimeResult|null $createTime
 * @property DestinationConfiguration|null $destinationConfiguration
 * @property string|null $id
 * @property string|null $name
 * @property 'CREATING'|'CREATE_FAILED'|'DELETING'|'DELETE_FAILED'|'UPDATING'|'UPDATE_FAILED'|'ACTIVE'|null $state
 * @property array<string, string>|null $tags
 * @property \Aws\Api\DateTimeResult|null $updateTime
 */
class LoggingConfigurationSummary extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     createTime?: \Aws\Api\DateTimeResult|null,
     *     destinationConfiguration?: DestinationConfiguration|null,
     *     id?: string|null,
     *     name?: string|null,
     *     state?: 'CREATING'|'CREATE_FAILED'|'DELETING'|'DELETE_FAILED'|'UPDATING'|'UPDATE_FAILED'|'ACTIVE'|null,
     *     tags?: array<string, string>|null,
     *     updateTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
