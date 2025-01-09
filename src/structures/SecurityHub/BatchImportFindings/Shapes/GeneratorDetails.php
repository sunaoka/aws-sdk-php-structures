<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Description
 * @property list<string> $Labels
 */
class GeneratorDetails extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     Description?: string,
     *     Labels?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
