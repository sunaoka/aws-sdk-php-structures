<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $hostUrl
 * @property 'SAAS' $hostType
 * @property 'BASIC'|'OAUTH2_CLIENT_CREDENTIALS' $authType
 * @property string $credentialsSecretArn
 */
class ConfluenceSourceConfiguration extends Shape
{
    /**
     * @param array{
     *     hostUrl: string,
     *     hostType: 'SAAS',
     *     authType: 'BASIC'|'OAUTH2_CLIENT_CREDENTIALS',
     *     credentialsSecretArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
