<?php

namespace Sunaoka\Aws\Structures\WellArchitected\GetAnswer;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $WorkloadId
 * @property int<1, 100>|null $MilestoneNumber
 * @property string|null $LensAlias
 * @property string|null $LensArn
 * @property Shapes\Answer|null $Answer
 */
class GetAnswerResponse extends Response
{
}
