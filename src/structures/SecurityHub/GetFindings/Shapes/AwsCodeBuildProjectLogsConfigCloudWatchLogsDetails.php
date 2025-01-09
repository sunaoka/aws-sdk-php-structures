<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $GroupName
 * @property string $Status
 * @property string $StreamName
 */
class AwsCodeBuildProjectLogsConfigCloudWatchLogsDetails extends Shape
{
    /**
     * @param array{
     *     GroupName?: string,
     *     Status?: string,
     *     StreamName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
