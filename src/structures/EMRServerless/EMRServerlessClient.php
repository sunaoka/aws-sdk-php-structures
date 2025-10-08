<?php

namespace Sunaoka\Aws\Structures\EMRServerless;

class EMRServerlessClient extends \Aws\EMRServerless\EMRServerlessClient
{
    use CancelJobRun\CancelJobRunTrait;
    use CreateApplication\CreateApplicationTrait;
    use DeleteApplication\DeleteApplicationTrait;
    use GetApplication\GetApplicationTrait;
    use GetDashboardForJobRun\GetDashboardForJobRunTrait;
    use GetJobRun\GetJobRunTrait;
    use ListApplications\ListApplicationsTrait;
    use ListJobRunAttempts\ListJobRunAttemptsTrait;
    use ListJobRuns\ListJobRunsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use StartApplication\StartApplicationTrait;
    use StartJobRun\StartJobRunTrait;
    use StopApplication\StopApplicationTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateApplication\UpdateApplicationTrait;
}
