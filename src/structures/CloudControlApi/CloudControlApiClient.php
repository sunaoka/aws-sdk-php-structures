<?php

namespace Sunaoka\Aws\Structures\CloudControlApi;

class CloudControlApiClient extends \Aws\CloudControlApi\CloudControlApiClient
{
    use CancelResourceRequest\CancelResourceRequestTrait;
    use CreateResource\CreateResourceTrait;
    use DeleteResource\DeleteResourceTrait;
    use GetResource\GetResourceTrait;
    use GetResourceRequestStatus\GetResourceRequestStatusTrait;
    use ListResourceRequests\ListResourceRequestsTrait;
    use ListResources\ListResourcesTrait;
    use UpdateResource\UpdateResourceTrait;
}
