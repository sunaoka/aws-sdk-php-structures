<?php

namespace Sunaoka\Aws\Structures\WellArchitected\GetLens;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LensAlias
 * @property string|null $LensVersion
 */
class GetLensRequest extends Request
{
    /**
     * @param array{
     *     LensAlias: string,
     *     LensVersion?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
