<?php

namespace Sunaoka\Aws\Structures\EndUserMessaging\GetBrandProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $brandProfileId
 */
class GetBrandProfileRequest extends Request
{
    /**
     * @param array{brandProfileId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
