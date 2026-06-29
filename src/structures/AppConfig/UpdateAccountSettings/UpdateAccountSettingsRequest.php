<?php

namespace Sunaoka\Aws\Structures\AppConfig\UpdateAccountSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\DeletionProtectionSettings|null $DeletionProtection
 * @property Shapes\VendedMetricsSettings|null $VendedMetrics
 */
class UpdateAccountSettingsRequest extends Request
{
    /**
     * @param array{
     *     DeletionProtection?: Shapes\DeletionProtectionSettings|null,
     *     VendedMetrics?: Shapes\VendedMetricsSettings|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
