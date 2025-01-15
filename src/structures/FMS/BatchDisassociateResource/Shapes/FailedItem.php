<?php

namespace Sunaoka\Aws\Structures\FMS\BatchDisassociateResource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $URI
 * @property 'NOT_VALID_ARN'|'NOT_VALID_PARTITION'|'NOT_VALID_REGION'|'NOT_VALID_SERVICE'|'NOT_VALID_RESOURCE_TYPE'|'NOT_VALID_ACCOUNT_ID'|null $Reason
 */
class FailedItem extends Shape
{
    /**
     * @param array{
     *     URI?: string|null,
     *     Reason?: 'NOT_VALID_ARN'|'NOT_VALID_PARTITION'|'NOT_VALID_REGION'|'NOT_VALID_SERVICE'|'NOT_VALID_RESOURCE_TYPE'|'NOT_VALID_ACCOUNT_ID'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
