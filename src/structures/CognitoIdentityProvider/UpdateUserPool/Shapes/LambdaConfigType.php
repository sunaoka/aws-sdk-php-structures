<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\UpdateUserPool\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PreSignUp
 * @property string|null $CustomMessage
 * @property string|null $PostConfirmation
 * @property string|null $PreAuthentication
 * @property string|null $PostAuthentication
 * @property string|null $DefineAuthChallenge
 * @property string|null $CreateAuthChallenge
 * @property string|null $VerifyAuthChallengeResponse
 * @property string|null $PreTokenGeneration
 * @property string|null $UserMigration
 * @property PreTokenGenerationVersionConfigType|null $PreTokenGenerationConfig
 * @property CustomSMSLambdaVersionConfigType|null $CustomSMSSender
 * @property CustomEmailLambdaVersionConfigType|null $CustomEmailSender
 * @property string|null $KMSKeyID
 * @property InboundFederationLambdaType|null $InboundFederation
 */
class LambdaConfigType extends Shape
{
    /**
     * @param array{
     *     PreSignUp?: string|null,
     *     CustomMessage?: string|null,
     *     PostConfirmation?: string|null,
     *     PreAuthentication?: string|null,
     *     PostAuthentication?: string|null,
     *     DefineAuthChallenge?: string|null,
     *     CreateAuthChallenge?: string|null,
     *     VerifyAuthChallengeResponse?: string|null,
     *     PreTokenGeneration?: string|null,
     *     UserMigration?: string|null,
     *     PreTokenGenerationConfig?: PreTokenGenerationVersionConfigType|null,
     *     CustomSMSSender?: CustomSMSLambdaVersionConfigType|null,
     *     CustomEmailSender?: CustomEmailLambdaVersionConfigType|null,
     *     KMSKeyID?: string|null,
     *     InboundFederation?: InboundFederationLambdaType|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
