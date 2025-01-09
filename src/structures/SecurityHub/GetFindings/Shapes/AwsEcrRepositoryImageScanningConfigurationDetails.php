<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $ScanOnPush
 */
class AwsEcrRepositoryImageScanningConfigurationDetails extends Shape
{
    /**
     * @param array{ScanOnPush?: bool} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
