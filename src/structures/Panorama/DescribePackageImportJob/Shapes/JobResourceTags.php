<?php

namespace Sunaoka\Aws\Structures\Panorama\DescribePackageImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PACKAGE' $ResourceType
 * @property array<string, string> $Tags
 */
class JobResourceTags extends Shape
{
    /**
     * @param array{
     *     ResourceType: 'PACKAGE',
     *     Tags: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
