<?php

namespace Sunaoka\Aws\Structures\drs\DescribeRecoverySnapshots\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $ebsSnapshots
 * @property string $expectedTimestamp
 * @property string $snapshotID
 * @property string $sourceServerID
 * @property string $timestamp
 */
class RecoverySnapshot extends Shape
{
    /**
     * @param array{
     *     ebsSnapshots?: list<string>,
     *     expectedTimestamp: string,
     *     snapshotID: string,
     *     sourceServerID: string,
     *     timestamp?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
