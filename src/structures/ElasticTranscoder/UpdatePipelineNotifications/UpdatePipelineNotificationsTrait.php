<?php

namespace Sunaoka\Aws\Structures\ElasticTranscoder\UpdatePipelineNotifications;

trait UpdatePipelineNotificationsTrait
{
    /**
     * @param UpdatePipelineNotificationsRequest $args
     * @return UpdatePipelineNotificationsResponse
     */
    public function updatePipelineNotifications(UpdatePipelineNotificationsRequest $args)
    {
        $result = parent::updatePipelineNotifications($args->toArray());
        return new UpdatePipelineNotificationsResponse($result->toArray());
    }
}
