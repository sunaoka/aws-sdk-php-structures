<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\ListResourcesByConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string|null $Name
 * @property string|null $DisplayName
 */
class AzureManagementGroupSummary extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     Name?: string|null,
     *     DisplayName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
