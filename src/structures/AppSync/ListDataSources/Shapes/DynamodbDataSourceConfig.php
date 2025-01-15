<?php

namespace Sunaoka\Aws\Structures\AppSync\ListDataSources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $tableName
 * @property string $awsRegion
 * @property bool|null $useCallerCredentials
 * @property DeltaSyncConfig|null $deltaSyncConfig
 * @property bool|null $versioned
 */
class DynamodbDataSourceConfig extends Shape
{
    /**
     * @param array{
     *     tableName: string,
     *     awsRegion: string,
     *     useCallerCredentials?: bool|null,
     *     deltaSyncConfig?: DeltaSyncConfig|null,
     *     versioned?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
