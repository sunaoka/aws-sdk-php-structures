<?php

namespace Sunaoka\Aws\Structures\Rds\CreateDBSnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBSnapshotIdentifier
 * @property string $DBInstanceIdentifier
 * @property list<Shapes\Tag> $Tags
 */
class CreateDBSnapshotRequest extends Request
{
    /**
     * @param array{
     *     DBSnapshotIdentifier: string,
     *     DBInstanceIdentifier: string,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
