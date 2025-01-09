<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\UpdateServiceAction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $Name
 * @property string $Description
 * @property 'SSM_AUTOMATION' $DefinitionType
 */
class ServiceActionSummary extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     Name?: string,
     *     Description?: string,
     *     DefinitionType?: 'SSM_AUTOMATION'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
