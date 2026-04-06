<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeNamespace\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property string|null $Arn
 * @property string|null $CapacityRegion
 * @property 'CREATED'|'CREATING'|'DELETING'|'RETRYABLE_FAILURE'|'NON_RETRYABLE_FAILURE'|null $CreationStatus
 * @property 'QUICKSIGHT'|null $IdentityStore
 * @property NamespaceError|null $NamespaceError
 * @property string|null $IamIdentityCenterApplicationArn
 * @property string|null $IamIdentityCenterInstanceArn
 */
class NamespaceInfoV2 extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Arn?: string|null,
     *     CapacityRegion?: string|null,
     *     CreationStatus?: 'CREATED'|'CREATING'|'DELETING'|'RETRYABLE_FAILURE'|'NON_RETRYABLE_FAILURE'|null,
     *     IdentityStore?: 'QUICKSIGHT'|null,
     *     NamespaceError?: NamespaceError|null,
     *     IamIdentityCenterApplicationArn?: string|null,
     *     IamIdentityCenterInstanceArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
