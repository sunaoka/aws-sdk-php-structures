<?php

namespace Sunaoka\Aws\Structures\MediaPackageVod\DeleteAsset;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 */
class DeleteAssetRequest extends Request
{
    /**
     * @param array{Id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
