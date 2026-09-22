<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\CreateIntegration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'AWS_CONFIG_SLREC'|'SLACK'|'EXTERNAL_AGENT'|'AWS_INTEGRATION' $integrationType
 * @property string $name
 * @property Shapes\IntegrationCredential|null $credential
 * @property array<string, string>|null $integrationAttributes
 * @property string|null $roleArn
 * @property array<string, string>|null $tags
 * @property string|null $clientToken
 */
class CreateIntegrationRequest extends Request
{
    /**
     * @param array{
     *     integrationType: 'AWS_CONFIG_SLREC'|'SLACK'|'EXTERNAL_AGENT'|'AWS_INTEGRATION',
     *     name: string,
     *     credential?: Shapes\IntegrationCredential|null,
     *     integrationAttributes?: array<string, string>|null,
     *     roleArn?: string|null,
     *     tags?: array<string, string>|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
