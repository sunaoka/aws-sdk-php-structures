<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $UserName
 * @property 'Active'|'Inactive' $Status
 * @property string $CreatedAt
 * @property string $PrincipalId
 * @property string $PrincipalType
 * @property string $PrincipalName
 * @property string $AccountId
 * @property string $AccessKeyId
 * @property AwsIamAccessKeySessionContext $SessionContext
 */
class AwsIamAccessKeyDetails extends Shape
{
    /**
     * @param array{
     *     UserName?: string,
     *     Status?: 'Active'|'Inactive',
     *     CreatedAt?: string,
     *     PrincipalId?: string,
     *     PrincipalType?: string,
     *     PrincipalName?: string,
     *     AccountId?: string,
     *     AccessKeyId?: string,
     *     SessionContext?: AwsIamAccessKeySessionContext
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
