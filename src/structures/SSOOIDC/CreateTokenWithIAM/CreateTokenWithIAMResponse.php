<?php

namespace Sunaoka\Aws\Structures\SSOOIDC\CreateTokenWithIAM;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $accessToken
 * @property string|null $tokenType
 * @property int|null $expiresIn
 * @property string|null $refreshToken
 * @property string|null $idToken
 * @property string|null $issuedTokenType
 * @property list<string>|null $scope
 * @property Shapes\AwsAdditionalDetails|null $awsAdditionalDetails
 */
class CreateTokenWithIAMResponse extends Response
{
}
