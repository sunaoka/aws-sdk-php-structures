<?php

namespace Sunaoka\Aws\Structures\Organizations\CreateOrganization\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property string|null $Arn
 * @property 'ALL'|'CONSOLIDATED_BILLING'|null $FeatureSet
 * @property string|null $MasterAccountArn
 * @property string|null $MasterAccountId
 * @property string|null $MasterAccountEmail
 * @property list<PolicyTypeSummary>|null $AvailablePolicyTypes
 */
class Organization extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     Arn?: string|null,
     *     FeatureSet?: 'ALL'|'CONSOLIDATED_BILLING'|null,
     *     MasterAccountArn?: string|null,
     *     MasterAccountId?: string|null,
     *     MasterAccountEmail?: string|null,
     *     AvailablePolicyTypes?: list<PolicyTypeSummary>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
