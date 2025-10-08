<?php

namespace Sunaoka\Aws\Structures\KendraRanking;

class KendraRankingClient extends \Aws\KendraRanking\KendraRankingClient
{
    use CreateRescoreExecutionPlan\CreateRescoreExecutionPlanTrait;
    use DeleteRescoreExecutionPlan\DeleteRescoreExecutionPlanTrait;
    use DescribeRescoreExecutionPlan\DescribeRescoreExecutionPlanTrait;
    use ListRescoreExecutionPlans\ListRescoreExecutionPlansTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use Rescore\RescoreTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateRescoreExecutionPlan\UpdateRescoreExecutionPlanTrait;
}
