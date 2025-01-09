<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'BASIC'|'OAUTH2_CLIENT_CREDENTIALS' $authType
 * @property string $credentialsSecretArn
 * @property 'SAAS' $hostType
 * @property string $hostUrl
 */
class ConfluenceSourceConfiguration extends Shape
{
    /**
     * @param array{
     *     authType: 'BASIC'|'OAUTH2_CLIENT_CREDENTIALS',
     *     credentialsSecretArn: string,
     *     hostType: 'SAAS',
     *     hostUrl: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
