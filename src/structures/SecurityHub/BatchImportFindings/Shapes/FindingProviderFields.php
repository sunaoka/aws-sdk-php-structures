<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Confidence
 * @property int $Criticality
 * @property list<RelatedFinding> $RelatedFindings
 * @property FindingProviderSeverity $Severity
 * @property list<string> $Types
 */
class FindingProviderFields extends Shape
{
    /**
     * @param array{
     *     Confidence?: int,
     *     Criticality?: int,
     *     RelatedFindings?: list<RelatedFinding>,
     *     Severity?: FindingProviderSeverity,
     *     Types?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
