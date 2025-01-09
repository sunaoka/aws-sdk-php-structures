<?php

namespace Sunaoka\Aws\Structures\LakeFormation\BatchGrantPermissions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CatalogId
 * @property list<Shapes\BatchPermissionsRequestEntry> $Entries
 */
class BatchGrantPermissionsRequest extends Request
{
    /**
     * @param array{
     *     CatalogId?: string,
     *     Entries: list<Shapes\BatchPermissionsRequestEntry>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
