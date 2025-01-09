<?php

namespace Sunaoka\Aws\Structures\Iot\ReplaceTopicRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $roleArn
 * @property string $logGroupName
 * @property bool $batchMode
 */
class CloudwatchLogsAction extends Shape
{
    /**
     * @param array{
     *     roleArn: string,
     *     logGroupName: string,
     *     batchMode?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
