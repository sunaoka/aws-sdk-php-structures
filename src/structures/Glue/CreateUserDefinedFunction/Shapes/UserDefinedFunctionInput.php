<?php

namespace Sunaoka\Aws\Structures\Glue\CreateUserDefinedFunction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $FunctionName
 * @property string|null $ClassName
 * @property string|null $OwnerName
 * @property 'REGULAR_FUNCTION'|'AGGREGATE_FUNCTION'|'STORED_PROCEDURE'|null $FunctionType
 * @property 'USER'|'ROLE'|'GROUP'|null $OwnerType
 * @property list<ResourceUri>|null $ResourceUris
 * @property string|null $ArtifactLocation
 * @property 'IAM_ONLY'|'LAKE_FORMATION'|null $GovernanceMode
 */
class UserDefinedFunctionInput extends Shape
{
    /**
     * @param array{
     *     FunctionName?: string|null,
     *     ClassName?: string|null,
     *     OwnerName?: string|null,
     *     FunctionType?: 'REGULAR_FUNCTION'|'AGGREGATE_FUNCTION'|'STORED_PROCEDURE'|null,
     *     OwnerType?: 'USER'|'ROLE'|'GROUP'|null,
     *     ResourceUris?: list<ResourceUri>|null,
     *     ArtifactLocation?: string|null,
     *     GovernanceMode?: 'IAM_ONLY'|'LAKE_FORMATION'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
