<?php

namespace Sunaoka\Aws\Structures\QLDB\StreamJournalToKinesis;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LedgerName
 * @property string $RoleArn
 * @property array<string, string>|null $Tags
 * @property \Aws\Api\DateTimeResult $InclusiveStartTime
 * @property \Aws\Api\DateTimeResult|null $ExclusiveEndTime
 * @property Shapes\KinesisConfiguration $KinesisConfiguration
 * @property string $StreamName
 */
class StreamJournalToKinesisRequest extends Request
{
    /**
     * @param array{
     *     LedgerName: string,
     *     RoleArn: string,
     *     Tags?: array<string, string>|null,
     *     InclusiveStartTime: \Aws\Api\DateTimeResult,
     *     ExclusiveEndTime?: \Aws\Api\DateTimeResult|null,
     *     KinesisConfiguration: Shapes\KinesisConfiguration,
     *     StreamName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
