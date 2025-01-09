<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\SetRiskConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $BlockedIPRangeList
 * @property list<string> $SkippedIPRangeList
 */
class RiskExceptionConfigurationType extends Shape
{
    /**
     * @param array{
     *     BlockedIPRangeList?: list<string>,
     *     SkippedIPRangeList?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
