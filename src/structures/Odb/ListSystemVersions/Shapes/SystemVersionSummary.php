<?php

namespace Sunaoka\Aws\Structures\Odb\ListSystemVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $giVersion
 * @property string|null $shape
 * @property list<string>|null $systemVersions
 */
class SystemVersionSummary extends Shape
{
    /**
     * @param array{
     *     giVersion?: string|null,
     *     shape?: string|null,
     *     systemVersions?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
