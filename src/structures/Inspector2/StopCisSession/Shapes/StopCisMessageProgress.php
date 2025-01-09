<?php

namespace Sunaoka\Aws\Structures\Inspector2\StopCisSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $errorChecks
 * @property int $failedChecks
 * @property int $informationalChecks
 * @property int $notApplicableChecks
 * @property int $notEvaluatedChecks
 * @property int $successfulChecks
 * @property int $totalChecks
 * @property int $unknownChecks
 */
class StopCisMessageProgress extends Shape
{
    /**
     * @param array{
     *     errorChecks?: int,
     *     failedChecks?: int,
     *     informationalChecks?: int,
     *     notApplicableChecks?: int,
     *     notEvaluatedChecks?: int,
     *     successfulChecks?: int,
     *     totalChecks?: int,
     *     unknownChecks?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
