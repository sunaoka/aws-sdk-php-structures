<?php

namespace Sunaoka\Aws\Structures\EMRContainers\GetManagedEndpointSessionCredentials;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $endpointIdentifier
 * @property string $virtualClusterIdentifier
 * @property string $executionRoleArn
 * @property string $credentialType
 * @property int|null $durationInSeconds
 * @property string|null $logContext
 * @property string|null $clientToken
 */
class GetManagedEndpointSessionCredentialsRequest extends Request
{
    /**
     * @param array{
     *     endpointIdentifier: string,
     *     virtualClusterIdentifier: string,
     *     executionRoleArn: string,
     *     credentialType: string,
     *     durationInSeconds?: int|null,
     *     logContext?: string|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
