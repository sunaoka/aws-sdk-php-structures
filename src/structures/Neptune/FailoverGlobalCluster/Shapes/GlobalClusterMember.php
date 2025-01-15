<?php

namespace Sunaoka\Aws\Structures\Neptune\FailoverGlobalCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DBClusterArn
 * @property list<string>|null $Readers
 * @property bool|null $IsWriter
 */
class GlobalClusterMember extends Shape
{
    /**
     * @param array{
     *     DBClusterArn?: string|null,
     *     Readers?: list<string>|null,
     *     IsWriter?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
