<?php

namespace Sunaoka\Aws\Structures\AppSync\GetGraphqlApi\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NONE'|'ERROR'|'ALL'|'INFO'|'DEBUG' $fieldLogLevel
 * @property string $cloudWatchLogsRoleArn
 * @property bool $excludeVerboseContent
 */
class LogConfig extends Shape
{
    /**
     * @param array{
     *     fieldLogLevel: 'NONE'|'ERROR'|'ALL'|'INFO'|'DEBUG',
     *     cloudWatchLogsRoleArn: string,
     *     excludeVerboseContent?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
