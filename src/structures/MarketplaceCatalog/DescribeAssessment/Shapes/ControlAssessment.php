<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\DescribeAssessment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ControlId
 * @property 'PASS'|'FAIL'|'NOT_EXECUTED'|'EXEMPTION_PASS'|null $ControlAssessmentResult
 * @property 'AWS_VERIFIED'|'SELF_ATTESTED'|null $VerificationSource
 * @property list<ControlError>|null $Errors
 * @property ControlSummary|null $ControlSummary
 */
class ControlAssessment extends Shape
{
    /**
     * @param array{
     *     ControlId?: string|null,
     *     ControlAssessmentResult?: 'PASS'|'FAIL'|'NOT_EXECUTED'|'EXEMPTION_PASS'|null,
     *     VerificationSource?: 'AWS_VERIFIED'|'SELF_ATTESTED'|null,
     *     Errors?: list<ControlError>|null,
     *     ControlSummary?: ControlSummary|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
