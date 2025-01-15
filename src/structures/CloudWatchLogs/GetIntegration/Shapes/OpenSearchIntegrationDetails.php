<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\GetIntegration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OpenSearchDataSource|null $dataSource
 * @property OpenSearchApplication|null $application
 * @property OpenSearchCollection|null $collection
 * @property OpenSearchWorkspace|null $workspace
 * @property OpenSearchEncryptionPolicy|null $encryptionPolicy
 * @property OpenSearchNetworkPolicy|null $networkPolicy
 * @property OpenSearchDataAccessPolicy|null $accessPolicy
 * @property OpenSearchLifecyclePolicy|null $lifecyclePolicy
 */
class OpenSearchIntegrationDetails extends Shape
{
    /**
     * @param array{
     *     dataSource?: OpenSearchDataSource|null,
     *     application?: OpenSearchApplication|null,
     *     collection?: OpenSearchCollection|null,
     *     workspace?: OpenSearchWorkspace|null,
     *     encryptionPolicy?: OpenSearchEncryptionPolicy|null,
     *     networkPolicy?: OpenSearchNetworkPolicy|null,
     *     accessPolicy?: OpenSearchDataAccessPolicy|null,
     *     lifecyclePolicy?: OpenSearchLifecyclePolicy|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
