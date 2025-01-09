<?php

namespace Sunaoka\Aws\Structures\S3Control\PutStorageLensConfigurationTagging;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConfigId
 * @property string $AccountId
 * @property list<Shapes\StorageLensTag> $Tags
 */
class PutStorageLensConfigurationTaggingRequest extends Request
{
    /**
     * @param array{
     *     ConfigId: string,
     *     AccountId: string,
     *     Tags: list<Shapes\StorageLensTag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
