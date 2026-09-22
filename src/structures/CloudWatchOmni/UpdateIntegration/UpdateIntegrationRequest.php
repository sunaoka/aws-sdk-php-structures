<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\UpdateIntegration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\IntegrationIdentifier $identifier
 * @property Shapes\IntegrationCredential|null $credential
 * @property array<string, string>|null $integrationAttributes
 * @property string|null $roleArn
 */
class UpdateIntegrationRequest extends Request
{
    /**
     * @param array{
     *     identifier: Shapes\IntegrationIdentifier,
     *     credential?: Shapes\IntegrationCredential|null,
     *     integrationAttributes?: array<string, string>|null,
     *     roleArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
