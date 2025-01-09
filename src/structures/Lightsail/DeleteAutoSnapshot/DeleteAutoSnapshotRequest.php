<?php

namespace Sunaoka\Aws\Structures\Lightsail\DeleteAutoSnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $resourceName
 * @property string $date
 */
class DeleteAutoSnapshotRequest extends Request
{
    /**
     * @param array{
     *     resourceName: string,
     *     date: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
