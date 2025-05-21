<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListDistributionTenants\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $DistributionId
 * @property string $Name
 * @property string $Arn
 * @property list<DomainResult> $Domains
 * @property string|null $ConnectionGroupId
 * @property Customizations|null $Customizations
 * @property \Aws\Api\DateTimeResult $CreatedTime
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property string $ETag
 * @property bool|null $Enabled
 * @property string|null $Status
 */
class DistributionTenantSummary extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     DistributionId: string,
     *     Name: string,
     *     Arn: string,
     *     Domains: list<DomainResult>,
     *     ConnectionGroupId?: string|null,
     *     Customizations?: Customizations|null,
     *     CreatedTime: \Aws\Api\DateTimeResult,
     *     LastModifiedTime: \Aws\Api\DateTimeResult,
     *     ETag: string,
     *     Enabled?: bool|null,
     *     Status?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
