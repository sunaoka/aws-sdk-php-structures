<?php

namespace Sunaoka\Aws\Structures\Glue\DeleteAsset;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Identifier
 */
class DeleteAssetRequest extends Request
{
    /**
     * @param array{Identifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
