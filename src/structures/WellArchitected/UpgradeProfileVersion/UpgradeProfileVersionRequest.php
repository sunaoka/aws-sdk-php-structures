<?php

namespace Sunaoka\Aws\Structures\WellArchitected\UpgradeProfileVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WorkloadId
 * @property string $ProfileArn
 * @property string $MilestoneName
 * @property string $ClientRequestToken
 */
class UpgradeProfileVersionRequest extends Request
{
    /**
     * @param array{
     *     WorkloadId: string,
     *     ProfileArn: string,
     *     MilestoneName?: string,
     *     ClientRequestToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
