<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 100>|null $Confidence
 * @property int<0, 100>|null $Criticality
 * @property list<RelatedFinding>|null $RelatedFindings
 * @property FindingProviderSeverity|null $Severity
 * @property list<string>|null $Types
 */
class FindingProviderFields extends Shape
{
    /**
     * @param array{
     *     Confidence?: int<0, 100>|null,
     *     Criticality?: int<0, 100>|null,
     *     RelatedFindings?: list<RelatedFinding>|null,
     *     Severity?: FindingProviderSeverity|null,
     *     Types?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
