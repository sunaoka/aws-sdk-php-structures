<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $GroupName
 * @property string|null $Status
 * @property string|null $StreamName
 */
class AwsCodeBuildProjectLogsConfigCloudWatchLogsDetails extends Shape
{
    /**
     * @param array{
     *     GroupName?: string|null,
     *     Status?: string|null,
     *     StreamName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
