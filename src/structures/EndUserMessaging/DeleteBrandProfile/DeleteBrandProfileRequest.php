<?php

namespace Sunaoka\Aws\Structures\EndUserMessaging\DeleteBrandProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $brandProfileId
 */
class DeleteBrandProfileRequest extends Request
{
    /**
     * @param array{brandProfileId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
