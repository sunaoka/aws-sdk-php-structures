<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SourcePath
 */
class AwsEcsTaskDefinitionVolumesHostDetails extends Shape
{
    /**
     * @param array{SourcePath?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
