<?php

namespace Sunaoka\Aws\Structures\FSx\DescribeDataRepositoryAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'file-system-id'|'backup-type'|'file-system-type'|'volume-id'|'data-repository-type'|'file-cache-id'|'file-cache-type'|null $Name
 * @property list<string>|null $Values
 */
class Filter extends Shape
{
    /**
     * @param array{
     *     Name?: 'file-system-id'|'backup-type'|'file-system-type'|'volume-id'|'data-repository-type'|'file-cache-id'|'file-cache-type'|null,
     *     Values?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
