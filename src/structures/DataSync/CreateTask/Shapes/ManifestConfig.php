<?php

namespace Sunaoka\Aws\Structures\DataSync\CreateTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'TRANSFER' $Action
 * @property 'CSV' $Format
 * @property SourceManifestConfig $Source
 */
class ManifestConfig extends Shape
{
    /**
     * @param array{
     *     Action?: 'TRANSFER',
     *     Format?: 'CSV',
     *     Source?: SourceManifestConfig
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
