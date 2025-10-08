<?php

namespace Sunaoka\Aws\Structures\Ec2\RestoreImageFromRecycleBin;

trait RestoreImageFromRecycleBinTrait
{
    /**
     * @param RestoreImageFromRecycleBinRequest $args
     * @return RestoreImageFromRecycleBinResponse
     */
    public function restoreImageFromRecycleBin(RestoreImageFromRecycleBinRequest $args)
    {
        $result = parent::restoreImageFromRecycleBin($args->toArray());
        return new RestoreImageFromRecycleBinResponse($result->toArray());
    }
}
