<?php

namespace Sunaoka\Aws\Structures\EMRContainers\GetManagedEndpointSessionCredentials;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $endpointIdentifier
 * @property string $virtualClusterIdentifier
 * @property string $executionRoleArn
 * @property string $credentialType
 * @property int $durationInSeconds
 * @property string $logContext
 * @property string $clientToken
 */
class GetManagedEndpointSessionCredentialsRequest extends Request
{
    /**
     * @param array{
     *     endpointIdentifier: string,
     *     virtualClusterIdentifier: string,
     *     executionRoleArn: string,
     *     credentialType: string,
     *     durationInSeconds?: int,
     *     logContext?: string,
     *     clientToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
