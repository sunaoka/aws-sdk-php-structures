<?php

namespace Sunaoka\Aws\Structures\AppSync\ListDataSources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $tableName
 * @property string $awsRegion
 * @property bool $useCallerCredentials
 * @property DeltaSyncConfig $deltaSyncConfig
 * @property bool $versioned
 */
class DynamodbDataSourceConfig extends Shape
{
    /**
     * @param array{
     *     tableName: string,
     *     awsRegion: string,
     *     useCallerCredentials?: bool,
     *     deltaSyncConfig?: DeltaSyncConfig,
     *     versioned?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
