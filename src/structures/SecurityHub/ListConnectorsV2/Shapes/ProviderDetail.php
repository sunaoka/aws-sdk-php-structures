<?php

namespace Sunaoka\Aws\Structures\SecurityHub\ListConnectorsV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property JiraCloudDetail|null $JiraCloud
 * @property ServiceNowDetail|null $ServiceNow
 * @property AzureDetail|null $Azure
 * @property GcpDetail|null $GCP
 */
class ProviderDetail extends Shape
{
    /**
     * @param array{
     *     JiraCloud?: JiraCloudDetail|null,
     *     ServiceNow?: ServiceNowDetail|null,
     *     Azure?: AzureDetail|null,
     *     GCP?: GcpDetail|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
