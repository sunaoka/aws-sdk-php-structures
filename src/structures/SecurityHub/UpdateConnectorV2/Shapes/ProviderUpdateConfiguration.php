<?php

namespace Sunaoka\Aws\Structures\SecurityHub\UpdateConnectorV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property JiraCloudUpdateConfiguration|null $JiraCloud
 * @property ServiceNowUpdateConfiguration|null $ServiceNow
 * @property AzureUpdateConfiguration|null $Azure
 * @property GcpUpdateConfiguration|null $GCP
 */
class ProviderUpdateConfiguration extends Shape
{
    /**
     * @param array{
     *     JiraCloud?: JiraCloudUpdateConfiguration|null,
     *     ServiceNow?: ServiceNowUpdateConfiguration|null,
     *     Azure?: AzureUpdateConfiguration|null,
     *     GCP?: GcpUpdateConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
