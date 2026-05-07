<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\GetPaymentInstrument\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LinkedAccountEmail|null $email
 * @property LinkedAccountSms|null $sms
 * @property LinkedAccountDeveloperJwt|null $developerJwt
 * @property LinkedAccountOAuth2|null $oAuth2
 */
class LinkedAccount extends Shape
{
    /**
     * @param array{
     *     email?: LinkedAccountEmail|null,
     *     sms?: LinkedAccountSms|null,
     *     developerJwt?: LinkedAccountDeveloperJwt|null,
     *     oAuth2?: LinkedAccountOAuth2|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
