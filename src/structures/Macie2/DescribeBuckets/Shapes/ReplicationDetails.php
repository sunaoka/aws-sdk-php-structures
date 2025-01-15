<?php

namespace Sunaoka\Aws\Structures\Macie2\DescribeBuckets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $replicated
 * @property bool|null $replicatedExternally
 * @property list<string>|null $replicationAccounts
 */
class ReplicationDetails extends Shape
{
    /**
     * @param array{
     *     replicated?: bool|null,
     *     replicatedExternally?: bool|null,
     *     replicationAccounts?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
