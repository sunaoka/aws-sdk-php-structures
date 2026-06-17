<?php

namespace Sunaoka\Aws\Structures\Glue\GetAssetType;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Identifier
 */
class GetAssetTypeRequest extends Request
{
    /**
     * @param array{Identifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
