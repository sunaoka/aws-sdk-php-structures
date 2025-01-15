<?php

namespace Sunaoka\Aws\Structures\Glue\GetUnfilteredPartitionsMetadata\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Partition|null $Partition
 * @property list<string>|null $AuthorizedColumns
 * @property bool|null $IsRegisteredWithLakeFormation
 */
class UnfilteredPartition extends Shape
{
    /**
     * @param array{
     *     Partition?: Partition|null,
     *     AuthorizedColumns?: list<string>|null,
     *     IsRegisteredWithLakeFormation?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
