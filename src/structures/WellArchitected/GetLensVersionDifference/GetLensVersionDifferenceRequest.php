<?php

namespace Sunaoka\Aws\Structures\WellArchitected\GetLensVersionDifference;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LensAlias
 * @property string $BaseLensVersion
 * @property string $TargetLensVersion
 */
class GetLensVersionDifferenceRequest extends Request
{
    /**
     * @param array{
     *     LensAlias: string,
     *     BaseLensVersion?: string,
     *     TargetLensVersion?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
