<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateSelfUpgrade;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $Namespace
 * @property string $UpgradeRequestId
 * @property 'APPROVE'|'DENY'|'VERIFY' $Action
 */
class UpdateSelfUpgradeRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     Namespace: string,
     *     UpgradeRequestId: string,
     *     Action: 'APPROVE'|'DENY'|'VERIFY'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
