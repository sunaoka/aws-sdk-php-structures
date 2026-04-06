<?php

namespace Sunaoka\Aws\Structures\MPA\ListIdentitySources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'IAM_IDENTITY_CENTER'|null $IdentitySourceType
 * @property IdentitySourceParametersForList|null $IdentitySourceParameters
 * @property string|null $IdentitySourceArn
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property 'CREATING'|'ACTIVE'|'DELETING'|'ERROR'|null $Status
 * @property 'ACCESS_DENIED'|'DELETION_FAILED'|'IDC_INSTANCE_NOT_FOUND'|'IDC_INSTANCE_NOT_VALID'|null $StatusCode
 * @property string|null $StatusMessage
 */
class IdentitySourceForList extends Shape
{
    /**
     * @param array{
     *     IdentitySourceType?: 'IAM_IDENTITY_CENTER'|null,
     *     IdentitySourceParameters?: IdentitySourceParametersForList|null,
     *     IdentitySourceArn?: string|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     Status?: 'CREATING'|'ACTIVE'|'DELETING'|'ERROR'|null,
     *     StatusCode?: 'ACCESS_DENIED'|'DELETION_FAILED'|'IDC_INSTANCE_NOT_FOUND'|'IDC_INSTANCE_NOT_VALID'|null,
     *     StatusMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
