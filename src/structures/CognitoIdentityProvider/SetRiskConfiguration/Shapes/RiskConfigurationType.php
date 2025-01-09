<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\SetRiskConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $UserPoolId
 * @property string $ClientId
 * @property CompromisedCredentialsRiskConfigurationType $CompromisedCredentialsRiskConfiguration
 * @property AccountTakeoverRiskConfigurationType $AccountTakeoverRiskConfiguration
 * @property RiskExceptionConfigurationType $RiskExceptionConfiguration
 * @property \Aws\Api\DateTimeResult $LastModifiedDate
 */
class RiskConfigurationType extends Shape
{
    /**
     * @param array{
     *     UserPoolId?: string,
     *     ClientId?: string,
     *     CompromisedCredentialsRiskConfiguration?: CompromisedCredentialsRiskConfigurationType,
     *     AccountTakeoverRiskConfiguration?: AccountTakeoverRiskConfigurationType,
     *     RiskExceptionConfiguration?: RiskExceptionConfigurationType,
     *     LastModifiedDate?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
