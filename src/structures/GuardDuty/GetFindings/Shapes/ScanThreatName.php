<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property string|null $Severity
 * @property int|null $ItemCount
 * @property list<ScanFilePath>|null $FilePaths
 */
class ScanThreatName extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Severity?: string|null,
     *     ItemCount?: int|null,
     *     FilePaths?: list<ScanFilePath>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
