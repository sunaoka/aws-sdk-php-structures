<?php

namespace Sunaoka\Aws\Structures\AppSync\ListGraphqlApis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NONE'|'ERROR'|'ALL' $fieldLogLevel
 * @property string $cloudWatchLogsRoleArn
 * @property bool|null $excludeVerboseContent
 */
class LogConfig extends Shape
{
    /**
     * @param array{
     *     fieldLogLevel: 'NONE'|'ERROR'|'ALL',
     *     cloudWatchLogsRoleArn: string,
     *     excludeVerboseContent?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
