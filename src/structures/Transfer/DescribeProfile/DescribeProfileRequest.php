<?php

namespace Sunaoka\Aws\Structures\Transfer\DescribeProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProfileId
 */
class DescribeProfileRequest extends Request
{
    /**
     * @param array{ProfileId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
