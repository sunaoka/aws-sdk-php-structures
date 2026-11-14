<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListClusterExtensionVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ExtensionVersion
 */
class ExtensionVersionSummary extends Shape
{
    /**
     * @param array{ExtensionVersion: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
