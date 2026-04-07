<?php

namespace Sunaoka\Aws\Structures\S3Files\GetAccessPoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $accessPointId
 */
class GetAccessPointRequest extends Request
{
    /**
     * @param array{accessPointId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
