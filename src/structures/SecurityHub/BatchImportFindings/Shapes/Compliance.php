<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PASSED'|'WARNING'|'FAILED'|'NOT_AVAILABLE'|null $Status
 * @property list<string>|null $RelatedRequirements
 * @property list<StatusReason>|null $StatusReasons
 * @property string|null $SecurityControlId
 * @property list<AssociatedStandard>|null $AssociatedStandards
 * @property list<SecurityControlParameter>|null $SecurityControlParameters
 */
class Compliance extends Shape
{
    /**
     * @param array{
     *     Status?: 'PASSED'|'WARNING'|'FAILED'|'NOT_AVAILABLE'|null,
     *     RelatedRequirements?: list<string>|null,
     *     StatusReasons?: list<StatusReason>|null,
     *     SecurityControlId?: string|null,
     *     AssociatedStandards?: list<AssociatedStandard>|null,
     *     SecurityControlParameters?: list<SecurityControlParameter>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
