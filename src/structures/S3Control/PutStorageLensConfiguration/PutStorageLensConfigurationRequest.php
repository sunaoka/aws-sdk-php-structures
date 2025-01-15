<?php

namespace Sunaoka\Aws\Structures\S3Control\PutStorageLensConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConfigId
 * @property string $AccountId
 * @property Shapes\StorageLensConfiguration $StorageLensConfiguration
 * @property list<Shapes\StorageLensTag>|null $Tags
 */
class PutStorageLensConfigurationRequest extends Request
{
    /**
     * @param array{
     *     ConfigId: string,
     *     AccountId: string,
     *     StorageLensConfiguration: Shapes\StorageLensConfiguration,
     *     Tags?: list<Shapes\StorageLensTag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
