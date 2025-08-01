<?php

namespace Sunaoka\Aws\Structures\Inspector2\SendCisSessionTelemetry\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ruleId
 * @property 'FAILED'|'PASSED'|'NOT_EVALUATED'|'INFORMATIONAL'|'UNKNOWN'|'NOT_APPLICABLE'|'ERROR' $status
 * @property string|resource|\Psr\Http\Message\StreamInterface $cisRuleDetails
 */
class CisSessionMessage extends Shape
{
    /**
     * @param array{
     *     ruleId: string,
     *     status: 'FAILED'|'PASSED'|'NOT_EVALUATED'|'INFORMATIONAL'|'UNKNOWN'|'NOT_APPLICABLE'|'ERROR',
     *     cisRuleDetails: string|resource|\Psr\Http\Message\StreamInterface
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
