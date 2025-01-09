<?php

namespace Sunaoka\Aws\Structures\DocDB\ModifyDBInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBInstanceIdentifier
 * @property string $DBInstanceClass
 * @property bool $ApplyImmediately
 * @property string $PreferredMaintenanceWindow
 * @property bool $AutoMinorVersionUpgrade
 * @property string $NewDBInstanceIdentifier
 * @property string $CACertificateIdentifier
 * @property bool $CopyTagsToSnapshot
 * @property int $PromotionTier
 * @property bool $EnablePerformanceInsights
 * @property string $PerformanceInsightsKMSKeyId
 * @property bool $CertificateRotationRestart
 */
class ModifyDBInstanceRequest extends Request
{
    /**
     * @param array{
     *     DBInstanceIdentifier: string,
     *     DBInstanceClass?: string,
     *     ApplyImmediately?: bool,
     *     PreferredMaintenanceWindow?: string,
     *     AutoMinorVersionUpgrade?: bool,
     *     NewDBInstanceIdentifier?: string,
     *     CACertificateIdentifier?: string,
     *     CopyTagsToSnapshot?: bool,
     *     PromotionTier?: int,
     *     EnablePerformanceInsights?: bool,
     *     PerformanceInsightsKMSKeyId?: string,
     *     CertificateRotationRestart?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
