<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateLimitsProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $profileId
 * @property string $accountId
 * @property string|null $profileName
 * @property string|null $description
 * @property array<'INDEX_STORAGE'|'AGENT_HOURS', Shapes\ProfileLimitValue>|null $resourceLimits
 */
class UpdateLimitsProfileRequest extends Request
{
    /**
     * @param array{
     *     profileId: string,
     *     accountId: string,
     *     profileName?: string|null,
     *     description?: string|null,
     *     resourceLimits?: array<'INDEX_STORAGE'|'AGENT_HOURS', Shapes\ProfileLimitValue>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
