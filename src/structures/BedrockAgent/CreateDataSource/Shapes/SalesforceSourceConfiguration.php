<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'OAUTH2_CLIENT_CREDENTIALS' $authType
 * @property string $credentialsSecretArn
 * @property string $hostUrl
 */
class SalesforceSourceConfiguration extends Shape
{
    /**
     * @param array{
     *     authType: 'OAUTH2_CLIENT_CREDENTIALS',
     *     credentialsSecretArn: string,
     *     hostUrl: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
