<?php

namespace Sunaoka\Aws\Structures\SecurityHub\UpdateConnectorV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property JiraCloudUpdateConfiguration|null $JiraCloud
 * @property ServiceNowUpdateConfiguration|null $ServiceNow
 */
class ProviderUpdateConfiguration extends Shape
{
    /**
     * @param array{
     *     JiraCloud?: JiraCloudUpdateConfiguration|null,
     *     ServiceNow?: ServiceNowUpdateConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
