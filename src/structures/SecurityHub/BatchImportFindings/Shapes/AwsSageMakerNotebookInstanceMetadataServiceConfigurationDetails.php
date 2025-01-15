<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $MinimumInstanceMetadataServiceVersion
 */
class AwsSageMakerNotebookInstanceMetadataServiceConfigurationDetails extends Shape
{
    /**
     * @param array{MinimumInstanceMetadataServiceVersion?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
