<?php

namespace Sunaoka\Aws\Structures\CloudFront\CreateDistributionWithTags\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $ARN
 * @property string $Status
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property int $InProgressInvalidationBatches
 * @property string $DomainName
 * @property ActiveTrustedSigners|null $ActiveTrustedSigners
 * @property ActiveTrustedKeyGroups|null $ActiveTrustedKeyGroups
 * @property DistributionConfig $DistributionConfig
 * @property list<AliasICPRecordal>|null $AliasICPRecordals
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
     *     ActiveTrustedSigners?: ActiveTrustedSigners|null,
     *     ActiveTrustedKeyGroups?: ActiveTrustedKeyGroups|null,
     *     DistributionConfig: DistributionConfig,
     *     AliasICPRecordals?: list<AliasICPRecordal>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
