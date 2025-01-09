<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 100> $Confidence
 * @property int<0, 100> $Criticality
 * @property list<RelatedFinding> $RelatedFindings
 * @property FindingProviderSeverity $Severity
 * @property list<string> $Types
 */
class FindingProviderFields extends Shape
{
    /**
     * @param array{
     *     Confidence?: int<0, 100>,
     *     Criticality?: int<0, 100>,
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
