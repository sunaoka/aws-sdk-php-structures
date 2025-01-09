<?php

namespace Sunaoka\Aws\Structures\Glue\GetUsageProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 */
class GetUsageProfileRequest extends Request
{
    /**
     * @param array{Name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
