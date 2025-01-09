<?php

namespace Sunaoka\Aws\Structures\WellArchitected\CreateLensShare;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LensAlias
 * @property string $SharedWith
 * @property string $ClientRequestToken
 */
class CreateLensShareRequest extends Request
{
    /**
     * @param array{
     *     LensAlias: string,
     *     SharedWith: string,
     *     ClientRequestToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
