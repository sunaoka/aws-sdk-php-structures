<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property string|null $Arn
 * @property AwsKinesisStreamStreamEncryptionDetails|null $StreamEncryption
 * @property int|null $ShardCount
 * @property int|null $RetentionPeriodHours
 */
class AwsKinesisStreamDetails extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Arn?: string|null,
     *     StreamEncryption?: AwsKinesisStreamStreamEncryptionDetails|null,
     *     ShardCount?: int|null,
     *     RetentionPeriodHours?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
