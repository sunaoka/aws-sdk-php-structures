<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\ListTelemetryFields;

trait ListTelemetryFieldsTrait
{
    /**
     * @param ListTelemetryFieldsRequest $args
     * @return ListTelemetryFieldsResponse
     */
    public function listTelemetryFields(ListTelemetryFieldsRequest $args)
    {
        $result = parent::listTelemetryFields($args->toArray());
        return new ListTelemetryFieldsResponse($result->toArray());
    }
}
