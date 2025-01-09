<?php

namespace Sunaoka\Aws\Structures\WellArchitected\GetLens;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LensAlias
 * @property string $LensVersion
 */
class GetLensRequest extends Request
{
    /**
     * @param array{
     *     LensAlias: string,
     *     LensVersion?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
