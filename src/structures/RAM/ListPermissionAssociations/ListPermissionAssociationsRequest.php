<?php

namespace Sunaoka\Aws\Structures\RAM\ListPermissionAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $permissionArn
 * @property int $permissionVersion
 * @property 'ASSOCIATING'|'ASSOCIATED'|'FAILED'|'DISASSOCIATING'|'DISASSOCIATED' $associationStatus
 * @property string $resourceType
 * @property 'CREATED_FROM_POLICY'|'PROMOTING_TO_STANDARD'|'STANDARD' $featureSet
 * @property bool $defaultVersion
 * @property string $nextToken
 * @property int $maxResults
 */
class ListPermissionAssociationsRequest extends Request
{
    /**
     * @param array{
     *     permissionArn?: string,
     *     permissionVersion?: int,
     *     associationStatus?: 'ASSOCIATING'|'ASSOCIATED'|'FAILED'|'DISASSOCIATING'|'DISASSOCIATED',
     *     resourceType?: string,
     *     featureSet?: 'CREATED_FROM_POLICY'|'PROMOTING_TO_STANDARD'|'STANDARD',
     *     defaultVersion?: bool,
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
