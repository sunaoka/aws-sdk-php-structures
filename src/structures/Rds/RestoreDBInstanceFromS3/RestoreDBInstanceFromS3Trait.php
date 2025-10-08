<?php

namespace Sunaoka\Aws\Structures\Rds\RestoreDBInstanceFromS3;

trait RestoreDBInstanceFromS3Trait
{
    /**
     * @param RestoreDBInstanceFromS3Request $args
     * @return RestoreDBInstanceFromS3Response
     */
    public function restoreDBInstanceFromS3(RestoreDBInstanceFromS3Request $args)
    {
        $result = parent::restoreDBInstanceFromS3($args->toArray());
        return new RestoreDBInstanceFromS3Response($result->toArray());
    }
}
