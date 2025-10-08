<?php

namespace Sunaoka\Aws\Structures\DirectoryService\DisableCAEnrollmentPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DirectoryId
 */
class DisableCAEnrollmentPolicyRequest extends Request
{
    /**
     * @param array{DirectoryId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
