<?php

namespace Sunaoka\Aws\Structures\Transfer\CreateWorkflow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property 'PGP' $Type
 * @property string $SourceFileLocation
 * @property 'TRUE'|'FALSE' $OverwriteExisting
 * @property InputFileLocation $DestinationFileLocation
 */
class DecryptStepDetails extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     Type: 'PGP',
     *     SourceFileLocation?: string,
     *     OverwriteExisting?: 'TRUE'|'FALSE',
     *     DestinationFileLocation: InputFileLocation
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
