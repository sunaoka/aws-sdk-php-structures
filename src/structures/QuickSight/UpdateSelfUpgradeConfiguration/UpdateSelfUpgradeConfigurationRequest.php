<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateSelfUpgradeConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $Namespace
 * @property 'AUTO_APPROVAL'|'ADMIN_APPROVAL' $SelfUpgradeStatus
 */
class UpdateSelfUpgradeConfigurationRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     Namespace: string,
     *     SelfUpgradeStatus: 'AUTO_APPROVAL'|'ADMIN_APPROVAL'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
