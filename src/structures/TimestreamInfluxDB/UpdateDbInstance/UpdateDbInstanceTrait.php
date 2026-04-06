<?php

namespace Sunaoka\Aws\Structures\TimestreamInfluxDB\UpdateDbInstance;

trait UpdateDbInstanceTrait
{
    /**
     * @param UpdateDbInstanceRequest $args
     * @return UpdateDbInstanceResponse
     */
    public function updateDbInstance(UpdateDbInstanceRequest $args)
    {
        $result = parent::updateDbInstance($args->toArray());
        return new UpdateDbInstanceResponse($result->toArray());
    }
}
