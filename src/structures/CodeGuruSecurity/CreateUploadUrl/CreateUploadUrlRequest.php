<?php

namespace Sunaoka\Aws\Structures\CodeGuruSecurity\CreateUploadUrl;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $scanName
 */
class CreateUploadUrlRequest extends Request
{
    /**
     * @param array{scanName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
