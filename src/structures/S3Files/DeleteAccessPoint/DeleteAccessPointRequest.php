<?php

namespace Sunaoka\Aws\Structures\S3Files\DeleteAccessPoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $accessPointId
 */
class DeleteAccessPointRequest extends Request
{
    /**
     * @param array{accessPointId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
