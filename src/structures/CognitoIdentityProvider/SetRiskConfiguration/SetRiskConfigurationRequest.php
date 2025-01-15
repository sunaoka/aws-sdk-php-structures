<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\SetRiskConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserPoolId
 * @property string|null $ClientId
 * @property Shapes\CompromisedCredentialsRiskConfigurationType|null $CompromisedCredentialsRiskConfiguration
 * @property Shapes\AccountTakeoverRiskConfigurationType|null $AccountTakeoverRiskConfiguration
 * @property Shapes\RiskExceptionConfigurationType|null $RiskExceptionConfiguration
 */
class SetRiskConfigurationRequest extends Request
{
    /**
     * @param array{
     *     UserPoolId: string,
     *     ClientId?: string|null,
     *     CompromisedCredentialsRiskConfiguration?: Shapes\CompromisedCredentialsRiskConfigurationType|null,
     *     AccountTakeoverRiskConfiguration?: Shapes\AccountTakeoverRiskConfigurationType|null,
     *     RiskExceptionConfiguration?: Shapes\RiskExceptionConfigurationType|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
