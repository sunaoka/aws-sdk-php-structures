<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\UpdateSpace;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $spaceId
 * @property string|null $name
 * @property Shapes\EncryptionConfiguration|null $encryptionConfiguration
 */
class UpdateSpaceRequest extends Request
{
    /**
     * @param array{
     *     spaceId: string,
     *     name?: string|null,
     *     encryptionConfiguration?: Shapes\EncryptionConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
