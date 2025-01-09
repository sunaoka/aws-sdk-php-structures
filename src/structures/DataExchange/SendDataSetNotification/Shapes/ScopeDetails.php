<?php

namespace Sunaoka\Aws\Structures\DataExchange\SendDataSetNotification\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<LakeFormationTagPolicyDetails> $LakeFormationTagPolicies
 * @property list<RedshiftDataShareDetails> $RedshiftDataShares
 * @property list<S3DataAccessDetails> $S3DataAccesses
 */
class ScopeDetails extends Shape
{
    /**
     * @param array{
     *     LakeFormationTagPolicies?: list<LakeFormationTagPolicyDetails>,
     *     RedshiftDataShares?: list<RedshiftDataShareDetails>,
     *     S3DataAccesses?: list<S3DataAccessDetails>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
