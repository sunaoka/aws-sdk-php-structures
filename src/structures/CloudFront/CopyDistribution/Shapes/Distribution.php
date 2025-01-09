<?php

namespace Sunaoka\Aws\Structures\CloudFront\CopyDistribution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $ARN
 * @property string $Status
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property int $InProgressInvalidationBatches
 * @property string $DomainName
 * @property ActiveTrustedSigners $ActiveTrustedSigners
 * @property ActiveTrustedKeyGroups $ActiveTrustedKeyGroups
 * @property DistributionConfig $DistributionConfig
 * @property list<AliasICPRecordal> $AliasICPRecordals
 */
class Distribution extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     ARN: string,
     *     Status: string,
     *     LastModifiedTime: \Aws\Api\DateTimeResult,
     *     InProgressInvalidationBatches: int,
     *     DomainName: string,
     *     ActiveTrustedSigners?: ActiveTrustedSigners,
     *     ActiveTrustedKeyGroups?: ActiveTrustedKeyGroups,
     *     DistributionConfig: DistributionConfig,
     *     AliasICPRecordals?: list<AliasICPRecordal>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
