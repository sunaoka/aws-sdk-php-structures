<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SourcePath
 */
class AwsEcsTaskVolumeHostDetails extends Shape
{
    /**
     * @param array{SourcePath?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
