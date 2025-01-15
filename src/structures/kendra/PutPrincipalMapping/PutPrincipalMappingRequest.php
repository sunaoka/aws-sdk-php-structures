<?php

namespace Sunaoka\Aws\Structures\kendra\PutPrincipalMapping;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IndexId
 * @property string|null $DataSourceId
 * @property string $GroupId
 * @property Shapes\GroupMembers $GroupMembers
 * @property int<0, 32535158400000>|null $OrderingId
 * @property string|null $RoleArn
 */
class PutPrincipalMappingRequest extends Request
{
    /**
     * @param array{
     *     IndexId: string,
     *     DataSourceId?: string|null,
     *     GroupId: string,
     *     GroupMembers: Shapes\GroupMembers,
     *     OrderingId?: int<0, 32535158400000>|null,
     *     RoleArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
