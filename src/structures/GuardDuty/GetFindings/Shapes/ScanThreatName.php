<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Severity
 * @property int $ItemCount
 * @property list<ScanFilePath> $FilePaths
 */
class ScanThreatName extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     Severity?: string,
     *     ItemCount?: int,
     *     FilePaths?: list<ScanFilePath>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
