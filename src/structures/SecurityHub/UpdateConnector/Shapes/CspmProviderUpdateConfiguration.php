<?php

namespace Sunaoka\Aws\Structures\SecurityHub\UpdateConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AzureUpdateConfiguration|null $Azure
 * @property GcpUpdateConfiguration|null $GCP
 */
class CspmProviderUpdateConfiguration extends Shape
{
    /**
     * @param array{
     *     Azure?: AzureUpdateConfiguration|null,
     *     GCP?: GcpUpdateConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
