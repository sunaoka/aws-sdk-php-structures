<?php

namespace Sunaoka\Aws\Structures\QBusiness\GetPlugin\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $secretArn
 * @property string $roleArn
 * @property string|null $authorizationUrl
 * @property string|null $tokenUrl
 */
class OAuth2ClientCredentialConfiguration extends Shape
{
    /**
     * @param array{
     *     secretArn: string,
     *     roleArn: string,
     *     authorizationUrl?: string|null,
     *     tokenUrl?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
