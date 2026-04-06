<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\GetScheduledQuery\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $destinationIdentifier
 * @property string $roleArn
 * @property string|null $ownerAccountId
 * @property string|null $kmsKeyId
 */
class S3Configuration extends Shape
{
    /**
     * @param array{
     *     destinationIdentifier: string,
     *     roleArn: string,
     *     ownerAccountId?: string|null,
     *     kmsKeyId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
