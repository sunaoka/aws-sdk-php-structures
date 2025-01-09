<?php

namespace Sunaoka\Aws\Structures\WellArchitected\GetAnswer;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $WorkloadId
 * @property int<1, 100> $MilestoneNumber
 * @property string $LensAlias
 * @property string $LensArn
 * @property Shapes\Answer $Answer
 */
class GetAnswerResponse extends Response
{
}
