<?php

namespace Sunaoka\Aws\Structures\Lambda\RemoveLayerVersionPermission;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LayerName
 * @property int $VersionNumber
 * @property string $StatementId
 * @property string|null $RevisionId
 */
class RemoveLayerVersionPermissionRequest extends Request
{
    /**
     * @param array{
     *     LayerName: string,
     *     VersionNumber: int,
     *     StatementId: string,
     *     RevisionId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
