<?php

namespace Sunaoka\Aws\Structures\Rds\CreateDBSnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBSnapshotIdentifier
 * @property string $DBInstanceIdentifier
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateDBSnapshotRequest extends Request
{
    /**
     * @param array{
     *     DBSnapshotIdentifier: string,
     *     DBInstanceIdentifier: string,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
