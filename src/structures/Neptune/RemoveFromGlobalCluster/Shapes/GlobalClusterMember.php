<?php

namespace Sunaoka\Aws\Structures\Neptune\RemoveFromGlobalCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DBClusterArn
 * @property list<string> $Readers
 * @property bool $IsWriter
 */
class GlobalClusterMember extends Shape
{
    /**
     * @param array{
     *     DBClusterArn?: string,
     *     Readers?: list<string>,
     *     IsWriter?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
