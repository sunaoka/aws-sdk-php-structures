<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\DescribeRiskConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $UserPoolId
 * @property string|null $ClientId
 * @property CompromisedCredentialsRiskConfigurationType|null $CompromisedCredentialsRiskConfiguration
 * @property AccountTakeoverRiskConfigurationType|null $AccountTakeoverRiskConfiguration
 * @property RiskExceptionConfigurationType|null $RiskExceptionConfiguration
 * @property \Aws\Api\DateTimeResult|null $LastModifiedDate
 */
class RiskConfigurationType extends Shape
{
    /**
     * @param array{
     *     UserPoolId?: string|null,
     *     ClientId?: string|null,
     *     CompromisedCredentialsRiskConfiguration?: CompromisedCredentialsRiskConfigurationType|null,
     *     AccountTakeoverRiskConfiguration?: AccountTakeoverRiskConfigurationType|null,
     *     RiskExceptionConfiguration?: RiskExceptionConfigurationType|null,
     *     LastModifiedDate?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
