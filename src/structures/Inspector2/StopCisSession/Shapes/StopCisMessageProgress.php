<?php

namespace Sunaoka\Aws\Structures\Inspector2\StopCisSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 65536>|null $errorChecks
 * @property int<0, 65536>|null $failedChecks
 * @property int<0, 65536>|null $informationalChecks
 * @property int<0, 65536>|null $notApplicableChecks
 * @property int<0, 65536>|null $notEvaluatedChecks
 * @property int<0, 65536>|null $successfulChecks
 * @property int<0, 65536>|null $totalChecks
 * @property int<0, 65536>|null $unknownChecks
 */
class StopCisMessageProgress extends Shape
{
    /**
     * @param array{
     *     errorChecks?: int<0, 65536>|null,
     *     failedChecks?: int<0, 65536>|null,
     *     informationalChecks?: int<0, 65536>|null,
     *     notApplicableChecks?: int<0, 65536>|null,
     *     notEvaluatedChecks?: int<0, 65536>|null,
     *     successfulChecks?: int<0, 65536>|null,
     *     totalChecks?: int<0, 65536>|null,
     *     unknownChecks?: int<0, 65536>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
