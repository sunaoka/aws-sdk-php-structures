<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $CoreCount
 * @property int $ThreadsPerCore
 */
class AwsEc2LaunchTemplateDataCpuOptionsDetails extends Shape
{
    /**
     * @param array{
     *     CoreCount?: int,
     *     ThreadsPerCore?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
