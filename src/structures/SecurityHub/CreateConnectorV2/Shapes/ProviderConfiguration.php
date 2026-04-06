<?php

namespace Sunaoka\Aws\Structures\SecurityHub\CreateConnectorV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property JiraCloudProviderConfiguration|null $JiraCloud
 * @property ServiceNowProviderConfiguration|null $ServiceNow
 */
class ProviderConfiguration extends Shape
{
    /**
     * @param array{
     *     JiraCloud?: JiraCloudProviderConfiguration|null,
     *     ServiceNow?: ServiceNowProviderConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
