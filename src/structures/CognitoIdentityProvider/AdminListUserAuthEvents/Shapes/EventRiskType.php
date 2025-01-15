<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\AdminListUserAuthEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NoRisk'|'AccountTakeover'|'Block'|null $RiskDecision
 * @property 'Low'|'Medium'|'High'|null $RiskLevel
 * @property bool|null $CompromisedCredentialsDetected
 */
class EventRiskType extends Shape
{
    /**
     * @param array{
     *     RiskDecision?: 'NoRisk'|'AccountTakeover'|'Block'|null,
     *     RiskLevel?: 'Low'|'Medium'|'High'|null,
     *     CompromisedCredentialsDetected?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
