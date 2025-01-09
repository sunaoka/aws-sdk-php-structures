<?php

namespace Sunaoka\Aws\Structures\StorageGateway\DeleteChapCredentials;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TargetARN
 * @property string $InitiatorName
 */
class DeleteChapCredentialsRequest extends Request
{
    /**
     * @param array{
     *     TargetARN: string,
     *     InitiatorName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
