<?php

namespace Sunaoka\Aws\Structures\WellArchitected\GetLensVersionDifference;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $LensAlias
 * @property string $LensArn
 * @property string $BaseLensVersion
 * @property string $TargetLensVersion
 * @property string $LatestLensVersion
 * @property Shapes\VersionDifferences $VersionDifferences
 */
class GetLensVersionDifferenceResponse extends Response
{
}
