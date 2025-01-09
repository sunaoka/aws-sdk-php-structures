<?php

namespace Sunaoka\Aws\Structures\Inspector2\SendCisSessionTelemetry\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $cisRuleDetails
 * @property string $ruleId
 * @property 'FAILED'|'PASSED'|'NOT_EVALUATED'|'INFORMATIONAL'|'UNKNOWN'|'NOT_APPLICABLE'|'ERROR' $status
 */
class CisSessionMessage extends Shape
{
    /**
     * @param array{
     *     cisRuleDetails: string,
     *     ruleId: string,
     *     status: 'FAILED'|'PASSED'|'NOT_EVALUATED'|'INFORMATIONAL'|'UNKNOWN'|'NOT_APPLICABLE'|'ERROR'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
