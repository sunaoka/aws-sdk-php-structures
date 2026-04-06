<?php

namespace Sunaoka\Aws\Structures\DataSync\DescribeTaskExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'TRANSFER'|null $Action
 * @property 'CSV'|null $Format
 * @property SourceManifestConfig|null $Source
 */
class ManifestConfig extends Shape
{
    /**
     * @param array{
     *     Action?: 'TRANSFER'|null,
     *     Format?: 'CSV'|null,
     *     Source?: SourceManifestConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
