<?php

namespace Sunaoka\Aws\Structures\SecurityHub\CreateConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AzureProviderConfiguration|null $Azure
 * @property GcpProviderConfiguration|null $GCP
 */
class CspmProviderConfiguration extends Shape
{
    /**
     * @param array{
     *     Azure?: AzureProviderConfiguration|null,
     *     GCP?: GcpProviderConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
