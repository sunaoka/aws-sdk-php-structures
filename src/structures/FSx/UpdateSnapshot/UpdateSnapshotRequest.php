<?php

namespace Sunaoka\Aws\Structures\FSx\UpdateSnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClientRequestToken
 * @property string|null $Name
 * @property string $SnapshotId
 * @property Shapes\UpdateOntapSnapshotConfiguration|null $OntapConfiguration
 */
class UpdateSnapshotRequest extends Request
{
    /**
     * @param array{
     *     ClientRequestToken?: string|null,
     *     Name?: string|null,
     *     SnapshotId: string,
     *     OntapConfiguration?: Shapes\UpdateOntapSnapshotConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
