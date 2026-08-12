<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateLimitsProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $accountId
 * @property string $profileName
 * @property string|null $description
 * @property array<'INDEX_STORAGE'|'AGENT_HOURS', Shapes\ProfileLimitValue> $resourceLimits
 * @property string $clientToken
 */
class CreateLimitsProfileRequest extends Request
{
    /**
     * @param array{
     *     accountId: string,
     *     profileName: string,
     *     description?: string|null,
     *     resourceLimits: array<'INDEX_STORAGE'|'AGENT_HOURS', Shapes\ProfileLimitValue>,
     *     clientToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
