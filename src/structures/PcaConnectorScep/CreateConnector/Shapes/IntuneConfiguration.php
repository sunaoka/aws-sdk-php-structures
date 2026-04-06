<?php

namespace Sunaoka\Aws\Structures\PcaConnectorScep\CreateConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AzureApplicationId
 * @property string $Domain
 */
class IntuneConfiguration extends Shape
{
    /**
     * @param array{
     *     AzureApplicationId: string,
     *     Domain: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
