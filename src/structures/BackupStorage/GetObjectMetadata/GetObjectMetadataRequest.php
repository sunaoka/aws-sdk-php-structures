<?php

namespace Sunaoka\Aws\Structures\BackupStorage\GetObjectMetadata;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StorageJobId
 * @property string $ObjectToken
 */
class GetObjectMetadataRequest extends Request
{
    /**
     * @param array{
     *     StorageJobId: string,
     *     ObjectToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
