<?php

namespace Sunaoka\Aws\Structures\ConfigService\ListConfigurationRecorders;

trait ListConfigurationRecordersTrait
{
    /**
     * @param ListConfigurationRecordersRequest $args
     * @return ListConfigurationRecordersResponse
     */
    public function listConfigurationRecorders(ListConfigurationRecordersRequest $args)
    {
        $result = parent::listConfigurationRecorders($args->toArray());
        return new ListConfigurationRecordersResponse($result->toArray());
    }
}
