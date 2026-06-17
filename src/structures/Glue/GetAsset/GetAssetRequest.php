<?php

namespace Sunaoka\Aws\Structures\Glue\GetAsset;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Identifier
 */
class GetAssetRequest extends Request
{
    /**
     * @param array{Identifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
