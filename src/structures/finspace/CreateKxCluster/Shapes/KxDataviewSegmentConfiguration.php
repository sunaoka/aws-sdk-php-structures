<?php

namespace Sunaoka\Aws\Structures\finspace\CreateKxCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $dbPaths
 * @property string $volumeName
 * @property bool $onDemand
 */
class KxDataviewSegmentConfiguration extends Shape
{
    /**
     * @param array{
     *     dbPaths: list<string>,
     *     volumeName: string,
     *     onDemand?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
