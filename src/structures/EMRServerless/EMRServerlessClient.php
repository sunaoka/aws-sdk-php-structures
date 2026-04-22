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
    use GetResourceDashboard\GetResourceDashboardTrait;
    use GetSession\GetSessionTrait;
    use GetSessionEndpoint\GetSessionEndpointTrait;
    use ListApplications\ListApplicationsTrait;
    use ListJobRunAttempts\ListJobRunAttemptsTrait;
    use ListJobRuns\ListJobRunsTrait;
    use ListSessions\ListSessionsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use StartApplication\StartApplicationTrait;
    use StartJobRun\StartJobRunTrait;
    use StartSession\StartSessionTrait;
    use StopApplication\StopApplicationTrait;
    use TagResource\TagResourceTrait;
    use TerminateSession\TerminateSessionTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateApplication\UpdateApplicationTrait;
}
