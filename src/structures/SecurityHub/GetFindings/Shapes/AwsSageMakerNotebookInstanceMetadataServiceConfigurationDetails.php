<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MinimumInstanceMetadataServiceVersion
 */
class AwsSageMakerNotebookInstanceMetadataServiceConfigurationDetails extends Shape
{
    /**
     * @param array{MinimumInstanceMetadataServiceVersion?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
