<?php

namespace Sunaoka\Aws\Structures\Transfer\CreateWorkflow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property 'PGP' $Type
 * @property string|null $SourceFileLocation
 * @property 'TRUE'|'FALSE'|null $OverwriteExisting
 * @property InputFileLocation $DestinationFileLocation
 */
class DecryptStepDetails extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Type: 'PGP',
     *     SourceFileLocation?: string|null,
     *     OverwriteExisting?: 'TRUE'|'FALSE'|null,
     *     DestinationFileLocation: InputFileLocation
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
