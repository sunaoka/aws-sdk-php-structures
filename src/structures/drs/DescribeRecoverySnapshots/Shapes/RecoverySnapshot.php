<?php

namespace Sunaoka\Aws\Structures\drs\DescribeRecoverySnapshots\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $snapshotID
 * @property string $sourceServerID
 * @property string $expectedTimestamp
 * @property string|null $timestamp
 * @property list<string>|null $ebsSnapshots
 */
class RecoverySnapshot extends Shape
{
    /**
     * @param array{
     *     snapshotID: string,
     *     sourceServerID: string,
     *     expectedTimestamp: string,
     *     timestamp?: string|null,
     *     ebsSnapshots?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
