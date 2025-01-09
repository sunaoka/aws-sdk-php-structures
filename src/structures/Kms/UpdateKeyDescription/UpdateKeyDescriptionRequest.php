<?php

namespace Sunaoka\Aws\Structures\Kms\UpdateKeyDescription;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $KeyId
 * @property string $Description
 */
class UpdateKeyDescriptionRequest extends Request
{
    /**
     * @param array{
     *     KeyId: string,
     *     Description: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
