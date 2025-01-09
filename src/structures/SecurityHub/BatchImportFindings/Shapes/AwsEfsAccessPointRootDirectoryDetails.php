<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsEfsAccessPointRootDirectoryCreationInfoDetails $CreationInfo
 * @property string $Path
 */
class AwsEfsAccessPointRootDirectoryDetails extends Shape
{
    /**
     * @param array{
     *     CreationInfo?: AwsEfsAccessPointRootDirectoryCreationInfoDetails,
     *     Path?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
