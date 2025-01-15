<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\DeleteNamespace;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $finalSnapshotName
 * @property int|null $finalSnapshotRetentionPeriod
 * @property string $namespaceName
 */
class DeleteNamespaceRequest extends Request
{
    /**
     * @param array{
     *     finalSnapshotName?: string|null,
     *     finalSnapshotRetentionPeriod?: int|null,
     *     namespaceName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
