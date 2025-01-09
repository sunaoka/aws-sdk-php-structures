<?php

namespace Sunaoka\Aws\Structures\WellArchitected\DeleteLensShare;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ShareId
 * @property string $LensAlias
 * @property string $ClientRequestToken
 */
class DeleteLensShareRequest extends Request
{
    /**
     * @param array{
     *     ShareId: string,
     *     LensAlias: string,
     *     ClientRequestToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
