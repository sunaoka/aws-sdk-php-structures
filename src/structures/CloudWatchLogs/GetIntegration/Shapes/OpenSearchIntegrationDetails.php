<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\GetIntegration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OpenSearchDataSource $dataSource
 * @property OpenSearchApplication $application
 * @property OpenSearchCollection $collection
 * @property OpenSearchWorkspace $workspace
 * @property OpenSearchEncryptionPolicy $encryptionPolicy
 * @property OpenSearchNetworkPolicy $networkPolicy
 * @property OpenSearchDataAccessPolicy $accessPolicy
 * @property OpenSearchLifecyclePolicy $lifecyclePolicy
 */
class OpenSearchIntegrationDetails extends Shape
{
    /**
     * @param array{
     *     dataSource?: OpenSearchDataSource,
     *     application?: OpenSearchApplication,
     *     collection?: OpenSearchCollection,
     *     workspace?: OpenSearchWorkspace,
     *     encryptionPolicy?: OpenSearchEncryptionPolicy,
     *     networkPolicy?: OpenSearchNetworkPolicy,
     *     accessPolicy?: OpenSearchDataAccessPolicy,
     *     lifecyclePolicy?: OpenSearchLifecyclePolicy
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
