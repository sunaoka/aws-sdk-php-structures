<?php

namespace Sunaoka\Aws\Structures\Inspector2\StopCisSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 65536> $errorChecks
 * @property int<0, 65536> $failedChecks
 * @property int<0, 65536> $informationalChecks
 * @property int<0, 65536> $notApplicableChecks
 * @property int<0, 65536> $notEvaluatedChecks
 * @property int<0, 65536> $successfulChecks
 * @property int<0, 65536> $totalChecks
 * @property int<0, 65536> $unknownChecks
 */
class StopCisMessageProgress extends Shape
{
    /**
     * @param array{
     *     errorChecks?: int<0, 65536>,
     *     failedChecks?: int<0, 65536>,
     *     informationalChecks?: int<0, 65536>,
     *     notApplicableChecks?: int<0, 65536>,
     *     notEvaluatedChecks?: int<0, 65536>,
     *     successfulChecks?: int<0, 65536>,
     *     totalChecks?: int<0, 65536>,
     *     unknownChecks?: int<0, 65536>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
