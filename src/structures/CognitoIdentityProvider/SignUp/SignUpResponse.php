<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\SignUp;

use Sunaoka\Aws\Structures\Response;

/**
 * @property bool $UserConfirmed
 * @property Shapes\CodeDeliveryDetailsType|null $CodeDeliveryDetails
 * @property string $UserSub
 * @property string|null $Session
 */
class SignUpResponse extends Response
{
}
