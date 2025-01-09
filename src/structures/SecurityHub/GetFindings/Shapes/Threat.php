<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Severity
 * @property int $ItemCount
 * @property list<FilePaths> $FilePaths
 */
class Threat extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     Severity?: string,
     *     ItemCount?: int,
     *     FilePaths?: list<FilePaths>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
