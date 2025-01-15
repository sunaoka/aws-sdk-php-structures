<?php

namespace Sunaoka\Aws\Structures\Transfer\CreateWorkflow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property InputFileLocation|null $DestinationFileLocation
 * @property 'TRUE'|'FALSE'|null $OverwriteExisting
 * @property string|null $SourceFileLocation
 */
class CopyStepDetails extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     DestinationFileLocation?: InputFileLocation|null,
     *     OverwriteExisting?: 'TRUE'|'FALSE'|null,
     *     SourceFileLocation?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
