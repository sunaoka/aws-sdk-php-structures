<?php

namespace Sunaoka\Aws\Structures\SecurityHub\ListExposuresByRemediationV2;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\ExposureFinding> $Items
 * @property string $TargetUid
 * @property Shapes\RemediationResource $Resource
 * @property int $TotalCount
 * @property Shapes\RemediationTrait $Trait
 * @property string|null $NextToken
 */
class ListExposuresByRemediationV2Response extends Response
{
}
