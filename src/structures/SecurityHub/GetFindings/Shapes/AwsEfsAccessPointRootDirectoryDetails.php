<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsEfsAccessPointRootDirectoryCreationInfoDetails|null $CreationInfo
 * @property string|null $Path
 */
class AwsEfsAccessPointRootDirectoryDetails extends Shape
{
    /**
     * @param array{
     *     CreationInfo?: AwsEfsAccessPointRootDirectoryCreationInfoDetails|null,
     *     Path?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
