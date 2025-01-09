<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListNamespaces\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Arn
 * @property string $CapacityRegion
 * @property 'CREATED'|'CREATING'|'DELETING'|'RETRYABLE_FAILURE'|'NON_RETRYABLE_FAILURE' $CreationStatus
 * @property 'QUICKSIGHT' $IdentityStore
 * @property NamespaceError $NamespaceError
 * @property string $IamIdentityCenterApplicationArn
 * @property string $IamIdentityCenterInstanceArn
 */
class NamespaceInfoV2 extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     Arn?: string,
     *     CapacityRegion?: string,
     *     CreationStatus?: 'CREATED'|'CREATING'|'DELETING'|'RETRYABLE_FAILURE'|'NON_RETRYABLE_FAILURE',
     *     IdentityStore?: 'QUICKSIGHT',
     *     NamespaceError?: NamespaceError,
     *     IamIdentityCenterApplicationArn?: string,
     *     IamIdentityCenterInstanceArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
