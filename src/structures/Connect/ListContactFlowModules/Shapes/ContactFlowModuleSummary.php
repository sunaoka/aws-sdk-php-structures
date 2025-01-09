<?php

namespace Sunaoka\Aws\Structures\Connect\ListContactFlowModules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $Arn
 * @property string $Name
 * @property 'ACTIVE'|'ARCHIVED' $State
 */
class ContactFlowModuleSummary extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     Arn?: string,
     *     Name?: string,
     *     State?: 'ACTIVE'|'ARCHIVED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
