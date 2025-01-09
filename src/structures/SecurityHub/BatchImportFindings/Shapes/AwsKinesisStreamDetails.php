<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Arn
 * @property AwsKinesisStreamStreamEncryptionDetails $StreamEncryption
 * @property int $ShardCount
 * @property int $RetentionPeriodHours
 */
class AwsKinesisStreamDetails extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     Arn?: string,
     *     StreamEncryption?: AwsKinesisStreamStreamEncryptionDetails,
     *     ShardCount?: int,
     *     RetentionPeriodHours?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
