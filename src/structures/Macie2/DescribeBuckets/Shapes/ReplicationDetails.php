<?php

namespace Sunaoka\Aws\Structures\Macie2\DescribeBuckets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $replicated
 * @property bool $replicatedExternally
 * @property list<string> $replicationAccounts
 */
class ReplicationDetails extends Shape
{
    /**
     * @param array{
     *     replicated?: bool,
     *     replicatedExternally?: bool,
     *     replicationAccounts?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
