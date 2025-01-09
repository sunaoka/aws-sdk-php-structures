<?php

namespace Sunaoka\Aws\Structures\FSx\CopySnapshotAndUpdateVolume\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<OpenZFSClientConfiguration> $ClientConfigurations
 */
class OpenZFSNfsExport extends Shape
{
    /**
     * @param array{ClientConfigurations: list<OpenZFSClientConfiguration>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
