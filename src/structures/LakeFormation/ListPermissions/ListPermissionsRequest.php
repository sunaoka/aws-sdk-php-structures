<?php

namespace Sunaoka\Aws\Structures\LakeFormation\ListPermissions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CatalogId
 * @property Shapes\DataLakePrincipal $Principal
 * @property 'CATALOG'|'DATABASE'|'TABLE'|'DATA_LOCATION'|'LF_TAG'|'LF_TAG_POLICY'|'LF_TAG_POLICY_DATABASE'|'LF_TAG_POLICY_TABLE'|'LF_NAMED_TAG_EXPRESSION' $ResourceType
 * @property Shapes\Resource $Resource
 * @property string $NextToken
 * @property int $MaxResults
 * @property string $IncludeRelated
 */
class ListPermissionsRequest extends Request
{
    /**
     * @param array{
     *     CatalogId?: string,
     *     Principal?: Shapes\DataLakePrincipal,
     *     ResourceType?: 'CATALOG'|'DATABASE'|'TABLE'|'DATA_LOCATION'|'LF_TAG'|'LF_TAG_POLICY'|'LF_TAG_POLICY_DATABASE'|'LF_TAG_POLICY_TABLE'|'LF_NAMED_TAG_EXPRESSION',
     *     Resource?: Shapes\Resource,
     *     NextToken?: string,
     *     MaxResults?: int,
     *     IncludeRelated?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
