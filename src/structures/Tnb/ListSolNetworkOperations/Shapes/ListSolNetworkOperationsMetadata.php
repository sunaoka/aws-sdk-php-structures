<?php

namespace Sunaoka\Aws\Structures\Tnb\ListSolNetworkOperations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $lastModified
 * @property string $nsdInfoId
 * @property string $vnfInstanceId
 */
class ListSolNetworkOperationsMetadata extends Shape
{
    /**
     * @param array{
     *     createdAt: \Aws\Api\DateTimeResult,
     *     lastModified: \Aws\Api\DateTimeResult,
     *     nsdInfoId?: string,
     *     vnfInstanceId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
