<?php

namespace Sunaoka\Aws\Structures\DocDB\CreateDBInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBInstanceIdentifier
 * @property string $DBInstanceClass
 * @property string $Engine
 * @property string|null $AvailabilityZone
 * @property string|null $PreferredMaintenanceWindow
 * @property bool|null $AutoMinorVersionUpgrade
 * @property list<Shapes\Tag>|null $Tags
 * @property string $DBClusterIdentifier
 * @property bool|null $CopyTagsToSnapshot
 * @property int|null $PromotionTier
 * @property bool|null $EnablePerformanceInsights
 * @property string|null $PerformanceInsightsKMSKeyId
 * @property string|null $CACertificateIdentifier
 */
class CreateDBInstanceRequest extends Request
{
    /**
     * @param array{
     *     DBInstanceIdentifier: string,
     *     DBInstanceClass: string,
     *     Engine: string,
     *     AvailabilityZone?: string|null,
     *     PreferredMaintenanceWindow?: string|null,
     *     AutoMinorVersionUpgrade?: bool|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     DBClusterIdentifier: string,
     *     CopyTagsToSnapshot?: bool|null,
     *     PromotionTier?: int|null,
     *     EnablePerformanceInsights?: bool|null,
     *     PerformanceInsightsKMSKeyId?: string|null,
     *     CACertificateIdentifier?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
