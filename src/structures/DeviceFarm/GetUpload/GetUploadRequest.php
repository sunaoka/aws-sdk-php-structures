<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\GetUpload;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 */
class GetUploadRequest extends Request
{
    /**
     * @param array{arn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
