<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property string|null $Severity
 * @property int|null $ItemCount
 * @property list<FilePaths>|null $FilePaths
 */
class Threat extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Severity?: string|null,
     *     ItemCount?: int|null,
     *     FilePaths?: list<FilePaths>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
