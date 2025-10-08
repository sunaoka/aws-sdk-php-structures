<?php

namespace Sunaoka\Aws\Structures\ApplicationInsights;

class ApplicationInsightsClient extends \Aws\ApplicationInsights\ApplicationInsightsClient
{
    use AddWorkload\AddWorkloadTrait;
    use CreateApplication\CreateApplicationTrait;
    use CreateComponent\CreateComponentTrait;
    use CreateLogPattern\CreateLogPatternTrait;
    use DeleteApplication\DeleteApplicationTrait;
    use DeleteComponent\DeleteComponentTrait;
    use DeleteLogPattern\DeleteLogPatternTrait;
    use DescribeApplication\DescribeApplicationTrait;
    use DescribeComponent\DescribeComponentTrait;
    use DescribeComponentConfiguration\DescribeComponentConfigurationTrait;
    use DescribeComponentConfigurationRecommendation\DescribeComponentConfigurationRecommendationTrait;
    use DescribeLogPattern\DescribeLogPatternTrait;
    use DescribeObservation\DescribeObservationTrait;
    use DescribeProblem\DescribeProblemTrait;
    use DescribeProblemObservations\DescribeProblemObservationsTrait;
    use DescribeWorkload\DescribeWorkloadTrait;
    use ListApplications\ListApplicationsTrait;
    use ListComponents\ListComponentsTrait;
    use ListConfigurationHistory\ListConfigurationHistoryTrait;
    use ListLogPatternSets\ListLogPatternSetsTrait;
    use ListLogPatterns\ListLogPatternsTrait;
    use ListProblems\ListProblemsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use ListWorkloads\ListWorkloadsTrait;
    use RemoveWorkload\RemoveWorkloadTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateApplication\UpdateApplicationTrait;
    use UpdateComponent\UpdateComponentTrait;
    use UpdateComponentConfiguration\UpdateComponentConfigurationTrait;
    use UpdateLogPattern\UpdateLogPatternTrait;
    use UpdateProblem\UpdateProblemTrait;
    use UpdateWorkload\UpdateWorkloadTrait;
}
