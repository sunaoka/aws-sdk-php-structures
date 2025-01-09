<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\UpdateUserPool\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PreSignUp
 * @property string $CustomMessage
 * @property string $PostConfirmation
 * @property string $PreAuthentication
 * @property string $PostAuthentication
 * @property string $DefineAuthChallenge
 * @property string $CreateAuthChallenge
 * @property string $VerifyAuthChallengeResponse
 * @property string $PreTokenGeneration
 * @property string $UserMigration
 * @property PreTokenGenerationVersionConfigType $PreTokenGenerationConfig
 * @property CustomSMSLambdaVersionConfigType $CustomSMSSender
 * @property CustomEmailLambdaVersionConfigType $CustomEmailSender
 * @property string $KMSKeyID
 */
class LambdaConfigType extends Shape
{
    /**
     * @param array{
     *     PreSignUp?: string,
     *     CustomMessage?: string,
     *     PostConfirmation?: string,
     *     PreAuthentication?: string,
     *     PostAuthentication?: string,
     *     DefineAuthChallenge?: string,
     *     CreateAuthChallenge?: string,
     *     VerifyAuthChallengeResponse?: string,
     *     PreTokenGeneration?: string,
     *     UserMigration?: string,
     *     PreTokenGenerationConfig?: PreTokenGenerationVersionConfigType,
     *     CustomSMSSender?: CustomSMSLambdaVersionConfigType,
     *     CustomEmailSender?: CustomEmailLambdaVersionConfigType,
     *     KMSKeyID?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
