<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetRemediationsV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $ResolvedFindingsCount
 * @property int $SeverityReductionFindingsCount
 * @property int $SeverityUnchangedCount
 */
class RemediationOutcome extends Shape
{
    /**
     * @param array{
     *     ResolvedFindingsCount: int,
     *     SeverityReductionFindingsCount: int,
     *     SeverityUnchangedCount: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
