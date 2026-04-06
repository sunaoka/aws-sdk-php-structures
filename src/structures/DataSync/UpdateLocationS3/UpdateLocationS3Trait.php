<?php

namespace Sunaoka\Aws\Structures\DataSync\UpdateLocationS3;

trait UpdateLocationS3Trait
{
    /**
     * @param UpdateLocationS3Request $args
     * @return UpdateLocationS3Response
     */
    public function updateLocationS3(UpdateLocationS3Request $args)
    {
        $result = parent::updateLocationS3($args->toArray());
        return new UpdateLocationS3Response($result->toArray());
    }
}
