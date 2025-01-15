<?php

namespace Sunaoka\Aws\Structures\Iot\CreateTopicRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $roleArn
 * @property string $logGroupName
 * @property bool|null $batchMode
 */
class CloudwatchLogsAction extends Shape
{
    /**
     * @param array{
     *     roleArn: string,
     *     logGroupName: string,
     *     batchMode?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
