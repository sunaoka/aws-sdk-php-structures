<?php

namespace Sunaoka\Aws\Structures\QuickSight\DeleteLimitsProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $profileId
 * @property string $accountId
 */
class DeleteLimitsProfileRequest extends Request
{
    /**
     * @param array{
     *     profileId: string,
     *     accountId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
