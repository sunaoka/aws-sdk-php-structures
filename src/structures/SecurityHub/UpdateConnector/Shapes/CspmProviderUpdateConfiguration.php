<?php

namespace Sunaoka\Aws\Structures\SecurityHub\UpdateConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AzureUpdateConfiguration|null $Azure
 */
class CspmProviderUpdateConfiguration extends Shape
{
    /**
     * @param array{Azure?: AzureUpdateConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
