<?php

namespace Sunaoka\Aws\Structures\StorageGateway\AddWorkingStorage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GatewayARN
 * @property list<string> $DiskIds
 */
class AddWorkingStorageRequest extends Request
{
    /**
     * @param array{
     *     GatewayARN: string,
     *     DiskIds: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
