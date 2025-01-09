<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\SetRiskConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserPoolId
 * @property string $ClientId
 * @property Shapes\CompromisedCredentialsRiskConfigurationType $CompromisedCredentialsRiskConfiguration
 * @property Shapes\AccountTakeoverRiskConfigurationType $AccountTakeoverRiskConfiguration
 * @property Shapes\RiskExceptionConfigurationType $RiskExceptionConfiguration
 */
class SetRiskConfigurationRequest extends Request
{
    /**
     * @param array{
     *     UserPoolId: string,
     *     ClientId?: string,
     *     CompromisedCredentialsRiskConfiguration?: Shapes\CompromisedCredentialsRiskConfigurationType,
     *     AccountTakeoverRiskConfiguration?: Shapes\AccountTakeoverRiskConfigurationType,
     *     RiskExceptionConfiguration?: Shapes\RiskExceptionConfigurationType
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
