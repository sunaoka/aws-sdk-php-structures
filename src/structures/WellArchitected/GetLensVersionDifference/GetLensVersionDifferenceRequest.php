<?php

namespace Sunaoka\Aws\Structures\WellArchitected\GetLensVersionDifference;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LensAlias
 * @property string|null $BaseLensVersion
 * @property string|null $TargetLensVersion
 */
class GetLensVersionDifferenceRequest extends Request
{
    /**
     * @param array{
     *     LensAlias: string,
     *     BaseLensVersion?: string|null,
     *     TargetLensVersion?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
