<?php

namespace Sunaoka\Aws\Structures\LakeFormation\ListPermissions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $CatalogId
 * @property Shapes\DataLakePrincipal|null $Principal
 * @property 'CATALOG'|'DATABASE'|'TABLE'|'DATA_LOCATION'|'LF_TAG'|'LF_TAG_POLICY'|'LF_TAG_POLICY_DATABASE'|'LF_TAG_POLICY_TABLE'|'LF_NAMED_TAG_EXPRESSION'|null $ResourceType
 * @property Shapes\ResourceShape|null $Resource
 * @property string|null $NextToken
 * @property int<1, 1000>|null $MaxResults
 * @property string|null $IncludeRelated
 */
class ListPermissionsRequest extends Request
{
    /**
     * @param array{
     *     CatalogId?: string|null,
     *     Principal?: Shapes\DataLakePrincipal|null,
     *     ResourceType?: 'CATALOG'|'DATABASE'|'TABLE'|'DATA_LOCATION'|'LF_TAG'|'LF_TAG_POLICY'|'LF_TAG_POLICY_DATABASE'|'LF_TAG_POLICY_TABLE'|'LF_NAMED_TAG_EXPRESSION'|null,
     *     Resource?: Shapes\ResourceShape|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 1000>|null,
     *     IncludeRelated?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
