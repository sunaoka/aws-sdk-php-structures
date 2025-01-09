<?php

namespace Sunaoka\Aws\Structures\AppRunner\ResumeService;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ServiceArn
 */
class ResumeServiceRequest extends Request
{
    /**
     * @param array{ServiceArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
