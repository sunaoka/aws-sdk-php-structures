<?php

namespace Sunaoka\Aws\Structures\SagemakerEdgeManager;

class SagemakerEdgeManagerClient extends \Aws\SagemakerEdgeManager\SagemakerEdgeManagerClient
{
    use GetDeployments\GetDeploymentsTrait;
    use GetDeviceRegistration\GetDeviceRegistrationTrait;
    use SendHeartbeat\SendHeartbeatTrait;
}
