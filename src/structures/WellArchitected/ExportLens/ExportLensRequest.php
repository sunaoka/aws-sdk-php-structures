<?php

namespace Sunaoka\Aws\Structures\WellArchitected\ExportLens;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LensAlias
 * @property string|null $LensVersion
 */
class ExportLensRequest extends Request
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
