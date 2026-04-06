<?php

namespace Sunaoka\Aws\Structures\Glue\DeleteUsageProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 */
class DeleteUsageProfileRequest extends Request
{
    /**
     * @param array{Name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
