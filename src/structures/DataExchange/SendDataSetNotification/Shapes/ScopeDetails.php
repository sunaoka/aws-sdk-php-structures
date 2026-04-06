<?php

namespace Sunaoka\Aws\Structures\DataExchange\SendDataSetNotification\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<LakeFormationTagPolicyDetails>|null $LakeFormationTagPolicies
 * @property list<RedshiftDataShareDetails>|null $RedshiftDataShares
 * @property list<S3DataAccessDetails>|null $S3DataAccesses
 */
class ScopeDetails extends Shape
{
    /**
     * @param array{
     *     LakeFormationTagPolicies?: list<LakeFormationTagPolicyDetails>|null,
     *     RedshiftDataShares?: list<RedshiftDataShareDetails>|null,
     *     S3DataAccesses?: list<S3DataAccessDetails>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
