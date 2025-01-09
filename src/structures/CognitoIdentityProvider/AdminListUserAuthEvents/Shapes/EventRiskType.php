<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\AdminListUserAuthEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NoRisk'|'AccountTakeover'|'Block' $RiskDecision
 * @property 'Low'|'Medium'|'High' $RiskLevel
 * @property bool $CompromisedCredentialsDetected
 */
class EventRiskType extends Shape
{
    /**
     * @param array{
     *     RiskDecision?: 'NoRisk'|'AccountTakeover'|'Block',
     *     RiskLevel?: 'Low'|'Medium'|'High',
     *     CompromisedCredentialsDetected?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
