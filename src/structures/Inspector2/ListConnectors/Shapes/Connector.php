<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListConnectors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $connectorArn
 * @property string|null $name
 * @property string|null $description
 * @property 'AZURE' $provider
 * @property 'ENABLED'|'PENDING_ENABLEMENT'|'FAILED_TO_ENABLE'|'PENDING_UPDATE'|'FAILED_TO_UPDATE'|'PENDING_DELETION'|'DELETED'|'FAILED_TO_DELETE'|null $enablementStatus
 * @property string|null $enablementStatusReason
 * @property ConnectorHealth|null $health
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property list<string>|null $azureRegions
 * @property string|null $awsConfigConnectorArn
 * @property AzureScopeConfiguration|null $scopeConfiguration
 * @property array<string, string>|null $tags
 * @property bool|null $autoInstallVMScanner
 */
class Connector extends Shape
{
    /**
     * @param array{
     *     connectorArn: string,
     *     name?: string|null,
     *     description?: string|null,
     *     provider: 'AZURE',
     *     enablementStatus?: 'ENABLED'|'PENDING_ENABLEMENT'|'FAILED_TO_ENABLE'|'PENDING_UPDATE'|'FAILED_TO_UPDATE'|'PENDING_DELETION'|'DELETED'|'FAILED_TO_DELETE'|null,
     *     enablementStatusReason?: string|null,
     *     health?: ConnectorHealth|null,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt: \Aws\Api\DateTimeResult,
     *     azureRegions?: list<string>|null,
     *     awsConfigConnectorArn?: string|null,
     *     scopeConfiguration?: AzureScopeConfiguration|null,
     *     tags?: array<string, string>|null,
     *     autoInstallVMScanner?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
