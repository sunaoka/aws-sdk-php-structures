<?php

namespace Sunaoka\Aws\Structures\Glue\GetUnfilteredPartitionsMetadata\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Partition $Partition
 * @property list<string> $AuthorizedColumns
 * @property bool $IsRegisteredWithLakeFormation
 */
class UnfilteredPartition extends Shape
{
    /**
     * @param array{
     *     Partition?: Partition,
     *     AuthorizedColumns?: list<string>,
     *     IsRegisteredWithLakeFormation?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
