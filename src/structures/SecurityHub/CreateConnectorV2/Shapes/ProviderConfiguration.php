<?php

namespace Sunaoka\Aws\Structures\SecurityHub\CreateConnectorV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property JiraCloudProviderConfiguration|null $JiraCloud
 * @property ServiceNowProviderConfiguration|null $ServiceNow
 * @property AzureProviderConfiguration|null $Azure
 * @property GcpProviderConfiguration|null $GCP
 */
class ProviderConfiguration extends Shape
{
    /**
     * @param array{
     *     JiraCloud?: JiraCloudProviderConfiguration|null,
     *     ServiceNow?: ServiceNowProviderConfiguration|null,
     *     Azure?: AzureProviderConfiguration|null,
     *     GCP?: GcpProviderConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
