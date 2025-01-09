<?php

namespace Sunaoka\Aws\Structures\Efs\DeleteAccessPoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccessPointId
 */
class DeleteAccessPointRequest extends Request
{
    /**
     * @param array{AccessPointId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
