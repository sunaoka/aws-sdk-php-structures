<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently;

class CloudWatchEvidentlyClient extends \Aws\CloudWatchEvidently\CloudWatchEvidentlyClient
{
    use BatchEvaluateFeature\BatchEvaluateFeatureTrait;
    use CreateExperiment\CreateExperimentTrait;
    use CreateFeature\CreateFeatureTrait;
    use CreateLaunch\CreateLaunchTrait;
    use CreateProject\CreateProjectTrait;
    use CreateSegment\CreateSegmentTrait;
    use DeleteExperiment\DeleteExperimentTrait;
    use DeleteFeature\DeleteFeatureTrait;
    use DeleteLaunch\DeleteLaunchTrait;
    use DeleteProject\DeleteProjectTrait;
    use DeleteSegment\DeleteSegmentTrait;
    use EvaluateFeature\EvaluateFeatureTrait;
    use GetExperiment\GetExperimentTrait;
    use GetExperimentResults\GetExperimentResultsTrait;
    use GetFeature\GetFeatureTrait;
    use GetLaunch\GetLaunchTrait;
    use GetProject\GetProjectTrait;
    use GetSegment\GetSegmentTrait;
    use ListExperiments\ListExperimentsTrait;
    use ListFeatures\ListFeaturesTrait;
    use ListLaunches\ListLaunchesTrait;
    use ListProjects\ListProjectsTrait;
    use ListSegmentReferences\ListSegmentReferencesTrait;
    use ListSegments\ListSegmentsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use PutProjectEvents\PutProjectEventsTrait;
    use StartExperiment\StartExperimentTrait;
    use StartLaunch\StartLaunchTrait;
    use StopExperiment\StopExperimentTrait;
    use StopLaunch\StopLaunchTrait;
    use TagResource\TagResourceTrait;
    use TestSegmentPattern\TestSegmentPatternTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateExperiment\UpdateExperimentTrait;
    use UpdateFeature\UpdateFeatureTrait;
    use UpdateLaunch\UpdateLaunchTrait;
    use UpdateProject\UpdateProjectTrait;
    use UpdateProjectDataDelivery\UpdateProjectDataDeliveryTrait;
}
