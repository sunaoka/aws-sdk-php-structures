<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetConnectorV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property JiraCloudDetail|null $JiraCloud
 * @property ServiceNowDetail|null $ServiceNow
 */
class ProviderDetail extends Shape
{
    /**
     * @param array{
     *     JiraCloud?: JiraCloudDetail|null,
     *     ServiceNow?: ServiceNowDetail|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
