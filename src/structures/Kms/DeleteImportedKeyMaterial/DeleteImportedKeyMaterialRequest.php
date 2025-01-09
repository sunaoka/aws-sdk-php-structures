<?php

namespace Sunaoka\Aws\Structures\Kms\DeleteImportedKeyMaterial;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $KeyId
 */
class DeleteImportedKeyMaterialRequest extends Request
{
    /**
     * @param array{KeyId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
