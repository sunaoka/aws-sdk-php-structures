<?php

namespace Sunaoka\Aws\Structures\WellArchitected\GetLensVersionDifference;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $LensAlias
 * @property string|null $LensArn
 * @property string|null $BaseLensVersion
 * @property string|null $TargetLensVersion
 * @property string|null $LatestLensVersion
 * @property Shapes\VersionDifferences|null $VersionDifferences
 */
class GetLensVersionDifferenceResponse extends Response
{
}
