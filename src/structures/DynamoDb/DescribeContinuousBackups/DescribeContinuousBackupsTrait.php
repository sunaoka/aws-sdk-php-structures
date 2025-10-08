<?php

namespace Sunaoka\Aws\Structures\DynamoDb\DescribeContinuousBackups;

trait DescribeContinuousBackupsTrait
{
    /**
     * @param DescribeContinuousBackupsRequest $args
     * @return DescribeContinuousBackupsResponse
     */
    public function describeContinuousBackups(DescribeContinuousBackupsRequest $args)
    {
        $result = parent::describeContinuousBackups($args->toArray());
        return new DescribeContinuousBackupsResponse($result->toArray());
    }
}
