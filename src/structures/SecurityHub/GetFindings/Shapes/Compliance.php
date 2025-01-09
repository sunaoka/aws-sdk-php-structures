<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PASSED'|'WARNING'|'FAILED'|'NOT_AVAILABLE' $Status
 * @property list<string> $RelatedRequirements
 * @property list<StatusReason> $StatusReasons
 * @property string $SecurityControlId
 * @property list<AssociatedStandard> $AssociatedStandards
 * @property list<SecurityControlParameter> $SecurityControlParameters
 */
class Compliance extends Shape
{
    /**
     * @param array{
     *     Status?: 'PASSED'|'WARNING'|'FAILED'|'NOT_AVAILABLE',
     *     RelatedRequirements?: list<string>,
     *     StatusReasons?: list<StatusReason>,
     *     SecurityControlId?: string,
     *     AssociatedStandards?: list<AssociatedStandard>,
     *     SecurityControlParameters?: list<SecurityControlParameter>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
