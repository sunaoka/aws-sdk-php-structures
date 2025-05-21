<?php

namespace Sunaoka\Aws\Structures\CloudFront\GetDistributionTenant\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property string|null $DistributionId
 * @property string|null $Name
 * @property string|null $Arn
 * @property list<DomainResult>|null $Domains
 * @property Tags|null $Tags
 * @property Customizations|null $Customizations
 * @property list<Parameter>|null $Parameters
 * @property string|null $ConnectionGroupId
 * @property \Aws\Api\DateTimeResult|null $CreatedTime
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 * @property bool|null $Enabled
 * @property string|null $Status
 */
class DistributionTenant extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     DistributionId?: string|null,
     *     Name?: string|null,
     *     Arn?: string|null,
     *     Domains?: list<DomainResult>|null,
     *     Tags?: Tags|null,
     *     Customizations?: Customizations|null,
     *     Parameters?: list<Parameter>|null,
     *     ConnectionGroupId?: string|null,
     *     CreatedTime?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult|null,
     *     Enabled?: bool|null,
     *     Status?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
