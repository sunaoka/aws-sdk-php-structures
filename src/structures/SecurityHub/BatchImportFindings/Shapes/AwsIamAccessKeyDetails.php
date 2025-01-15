<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $UserName
 * @property 'Active'|'Inactive'|null $Status
 * @property string|null $CreatedAt
 * @property string|null $PrincipalId
 * @property string|null $PrincipalType
 * @property string|null $PrincipalName
 * @property string|null $AccountId
 * @property string|null $AccessKeyId
 * @property AwsIamAccessKeySessionContext|null $SessionContext
 */
class AwsIamAccessKeyDetails extends Shape
{
    /**
     * @param array{
     *     UserName?: string|null,
     *     Status?: 'Active'|'Inactive'|null,
     *     CreatedAt?: string|null,
     *     PrincipalId?: string|null,
     *     PrincipalType?: string|null,
     *     PrincipalName?: string|null,
     *     AccountId?: string|null,
     *     AccessKeyId?: string|null,
     *     SessionContext?: AwsIamAccessKeySessionContext|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
