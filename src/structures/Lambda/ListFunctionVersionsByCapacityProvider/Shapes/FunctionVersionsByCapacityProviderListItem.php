<?php

namespace Sunaoka\Aws\Structures\Lambda\ListFunctionVersionsByCapacityProvider\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FunctionArn
 * @property 'Pending'|'Active'|'Inactive'|'Failed'|'Deactivating'|'Deactivated'|'ActiveNonInvocable'|'Deleting' $State
 */
class FunctionVersionsByCapacityProviderListItem extends Shape
{
    /**
     * @param array{
     *     FunctionArn: string,
     *     State: 'Pending'|'Active'|'Inactive'|'Failed'|'Deactivating'|'Deactivated'|'ActiveNonInvocable'|'Deleting'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
