<?php

namespace Sunaoka\Aws\Structures\RAM\ListPermissionAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $permissionArn
 * @property int|null $permissionVersion
 * @property 'ASSOCIATING'|'ASSOCIATED'|'FAILED'|'DISASSOCIATING'|'DISASSOCIATED'|null $associationStatus
 * @property string|null $resourceType
 * @property 'CREATED_FROM_POLICY'|'PROMOTING_TO_STANDARD'|'STANDARD'|null $featureSet
 * @property bool|null $defaultVersion
 * @property string|null $nextToken
 * @property int<1, 500>|null $maxResults
 */
class ListPermissionAssociationsRequest extends Request
{
    /**
     * @param array{
     *     permissionArn?: string|null,
     *     permissionVersion?: int|null,
     *     associationStatus?: 'ASSOCIATING'|'ASSOCIATED'|'FAILED'|'DISASSOCIATING'|'DISASSOCIATED'|null,
     *     resourceType?: string|null,
     *     featureSet?: 'CREATED_FROM_POLICY'|'PROMOTING_TO_STANDARD'|'STANDARD'|null,
     *     defaultVersion?: bool|null,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 500>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
