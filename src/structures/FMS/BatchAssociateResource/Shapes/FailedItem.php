<?php

namespace Sunaoka\Aws\Structures\FMS\BatchAssociateResource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $URI
 * @property 'NOT_VALID_ARN'|'NOT_VALID_PARTITION'|'NOT_VALID_REGION'|'NOT_VALID_SERVICE'|'NOT_VALID_RESOURCE_TYPE'|'NOT_VALID_ACCOUNT_ID' $Reason
 */
class FailedItem extends Shape
{
    /**
     * @param array{
     *     URI?: string,
     *     Reason?: 'NOT_VALID_ARN'|'NOT_VALID_PARTITION'|'NOT_VALID_REGION'|'NOT_VALID_SERVICE'|'NOT_VALID_RESOURCE_TYPE'|'NOT_VALID_ACCOUNT_ID'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
