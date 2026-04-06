<?php

namespace Sunaoka\Aws\Structures\Kms\DeleteImportedKeyMaterial;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $KeyId
 * @property string|null $KeyMaterialId
 */
class DeleteImportedKeyMaterialRequest extends Request
{
    /**
     * @param array{
     *     KeyId: string,
     *     KeyMaterialId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
