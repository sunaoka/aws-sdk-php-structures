<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\DeleteNamespace;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $finalSnapshotName
 * @property int $finalSnapshotRetentionPeriod
 * @property string $namespaceName
 */
class DeleteNamespaceRequest extends Request
{
    /**
     * @param array{
     *     finalSnapshotName?: string,
     *     finalSnapshotRetentionPeriod?: int,
     *     namespaceName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
