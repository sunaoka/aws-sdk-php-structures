<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\SetRiskConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $BlockedIPRangeList
 * @property list<string>|null $SkippedIPRangeList
 */
class RiskExceptionConfigurationType extends Shape
{
    /**
     * @param array{
     *     BlockedIPRangeList?: list<string>|null,
     *     SkippedIPRangeList?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
