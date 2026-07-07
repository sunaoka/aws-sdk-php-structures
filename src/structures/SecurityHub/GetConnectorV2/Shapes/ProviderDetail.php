<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetConnectorV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property JiraCloudDetail|null $JiraCloud
 * @property ServiceNowDetail|null $ServiceNow
 * @property AzureDetail|null $Azure
 */
class ProviderDetail extends Shape
{
    /**
     * @param array{
     *     JiraCloud?: JiraCloudDetail|null,
     *     ServiceNow?: ServiceNowDetail|null,
     *     Azure?: AzureDetail|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
