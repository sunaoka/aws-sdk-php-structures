<?php

namespace Sunaoka\Aws\Structures\DocDB\ModifyDBInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBInstanceIdentifier
 * @property string|null $DBInstanceClass
 * @property bool|null $ApplyImmediately
 * @property string|null $PreferredMaintenanceWindow
 * @property bool|null $AutoMinorVersionUpgrade
 * @property string|null $NewDBInstanceIdentifier
 * @property string|null $CACertificateIdentifier
 * @property bool|null $CopyTagsToSnapshot
 * @property int|null $PromotionTier
 * @property bool|null $EnablePerformanceInsights
 * @property string|null $PerformanceInsightsKMSKeyId
 * @property bool|null $CertificateRotationRestart
 */
class ModifyDBInstanceRequest extends Request
{
    /**
     * @param array{
     *     DBInstanceIdentifier: string,
     *     DBInstanceClass?: string|null,
     *     ApplyImmediately?: bool|null,
     *     PreferredMaintenanceWindow?: string|null,
     *     AutoMinorVersionUpgrade?: bool|null,
     *     NewDBInstanceIdentifier?: string|null,
     *     CACertificateIdentifier?: string|null,
     *     CopyTagsToSnapshot?: bool|null,
     *     PromotionTier?: int|null,
     *     EnablePerformanceInsights?: bool|null,
     *     PerformanceInsightsKMSKeyId?: string|null,
     *     CertificateRotationRestart?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
