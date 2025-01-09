<?php

namespace Sunaoka\Aws\Structures\DocDB\CreateDBInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBInstanceIdentifier
 * @property string $DBInstanceClass
 * @property string $Engine
 * @property string $AvailabilityZone
 * @property string $PreferredMaintenanceWindow
 * @property bool $AutoMinorVersionUpgrade
 * @property list<Shapes\Tag> $Tags
 * @property string $DBClusterIdentifier
 * @property bool $CopyTagsToSnapshot
 * @property int $PromotionTier
 * @property bool $EnablePerformanceInsights
 * @property string $PerformanceInsightsKMSKeyId
 * @property string $CACertificateIdentifier
 */
class CreateDBInstanceRequest extends Request
{
    /**
     * @param array{
     *     DBInstanceIdentifier: string,
     *     DBInstanceClass: string,
     *     Engine: string,
     *     AvailabilityZone?: string,
     *     PreferredMaintenanceWindow?: string,
     *     AutoMinorVersionUpgrade?: bool,
     *     Tags?: list<Shapes\Tag>,
     *     DBClusterIdentifier: string,
     *     CopyTagsToSnapshot?: bool,
     *     PromotionTier?: int,
     *     EnablePerformanceInsights?: bool,
     *     PerformanceInsightsKMSKeyId?: string,
     *     CACertificateIdentifier?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
