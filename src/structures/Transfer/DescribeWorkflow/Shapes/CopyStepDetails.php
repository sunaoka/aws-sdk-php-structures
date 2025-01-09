<?php

namespace Sunaoka\Aws\Structures\Transfer\DescribeWorkflow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property InputFileLocation $DestinationFileLocation
 * @property 'TRUE'|'FALSE' $OverwriteExisting
 * @property string $SourceFileLocation
 */
class CopyStepDetails extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     DestinationFileLocation?: InputFileLocation,
     *     OverwriteExisting?: 'TRUE'|'FALSE',
     *     SourceFileLocation?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
