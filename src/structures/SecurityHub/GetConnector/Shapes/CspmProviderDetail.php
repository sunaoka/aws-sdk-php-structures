<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AzureDetail|null $Azure
 * @property GcpDetail|null $GCP
 */
class CspmProviderDetail extends Shape
{
    /**
     * @param array{
     *     Azure?: AzureDetail|null,
     *     GCP?: GcpDetail|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
