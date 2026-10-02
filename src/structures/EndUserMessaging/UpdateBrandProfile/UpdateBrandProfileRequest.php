<?php

namespace Sunaoka\Aws\Structures\EndUserMessaging\UpdateBrandProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $brandProfileId
 * @property string|null $brandProfileName
 * @property bool|null $deletionProtectionEnabled
 */
class UpdateBrandProfileRequest extends Request
{
    /**
     * @param array{
     *     brandProfileId: string,
     *     brandProfileName?: string|null,
     *     deletionProtectionEnabled?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
