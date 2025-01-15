<?php

namespace Sunaoka\Aws\Structures\Connect\ListContactFlowModules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property string|null $Arn
 * @property string|null $Name
 * @property 'ACTIVE'|'ARCHIVED'|null $State
 */
class ContactFlowModuleSummary extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     Arn?: string|null,
     *     Name?: string|null,
     *     State?: 'ACTIVE'|'ARCHIVED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
