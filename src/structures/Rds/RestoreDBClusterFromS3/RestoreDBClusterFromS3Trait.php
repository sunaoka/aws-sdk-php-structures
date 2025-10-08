<?php

namespace Sunaoka\Aws\Structures\Rds\RestoreDBClusterFromS3;

trait RestoreDBClusterFromS3Trait
{
    /**
     * @param RestoreDBClusterFromS3Request $args
     * @return RestoreDBClusterFromS3Response
     */
    public function restoreDBClusterFromS3(RestoreDBClusterFromS3Request $args)
    {
        $result = parent::restoreDBClusterFromS3($args->toArray());
        return new RestoreDBClusterFromS3Response($result->toArray());
    }
}
