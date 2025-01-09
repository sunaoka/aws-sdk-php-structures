<?php

namespace Sunaoka\Aws\Structures\QBusiness\GetPlugin\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $secretArn
 * @property string $roleArn
 * @property string $authorizationUrl
 * @property string $tokenUrl
 */
class OAuth2ClientCredentialConfiguration extends Shape
{
    /**
     * @param array{
     *     secretArn: string,
     *     roleArn: string,
     *     authorizationUrl?: string,
     *     tokenUrl?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
