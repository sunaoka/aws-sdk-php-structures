<?php

namespace Sunaoka\Aws\Structures\Organizations\DescribeOrganization\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $Arn
 * @property 'ALL'|'CONSOLIDATED_BILLING' $FeatureSet
 * @property string $MasterAccountArn
 * @property string $MasterAccountId
 * @property string $MasterAccountEmail
 * @property list<PolicyTypeSummary> $AvailablePolicyTypes
 */
class Organization extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     Arn?: string,
     *     FeatureSet?: 'ALL'|'CONSOLIDATED_BILLING',
     *     MasterAccountArn?: string,
     *     MasterAccountId?: string,
     *     MasterAccountEmail?: string,
     *     AvailablePolicyTypes?: list<PolicyTypeSummary>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
