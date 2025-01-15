<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $CoreCount
 * @property int|null $ThreadsPerCore
 */
class AwsEc2LaunchTemplateDataCpuOptionsDetails extends Shape
{
    /**
     * @param array{
     *     CoreCount?: int|null,
     *     ThreadsPerCore?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
