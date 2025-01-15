<?php

namespace Sunaoka\Aws\Structures\LakeFormation\BatchRevokePermissions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $CatalogId
 * @property list<Shapes\BatchPermissionsRequestEntry> $Entries
 */
class BatchRevokePermissionsRequest extends Request
{
    /**
     * @param array{
     *     CatalogId?: string|null,
     *     Entries: list<Shapes\BatchPermissionsRequestEntry>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
