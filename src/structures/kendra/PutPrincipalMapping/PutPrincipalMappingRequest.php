<?php

namespace Sunaoka\Aws\Structures\kendra\PutPrincipalMapping;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IndexId
 * @property string $DataSourceId
 * @property string $GroupId
 * @property Shapes\GroupMembers $GroupMembers
 * @property int<0, 32535158400000> $OrderingId
 * @property string $RoleArn
 */
class PutPrincipalMappingRequest extends Request
{
    /**
     * @param array{
     *     IndexId: string,
     *     DataSourceId?: string,
     *     GroupId: string,
     *     GroupMembers: Shapes\GroupMembers,
     *     OrderingId?: int<0, 32535158400000>,
     *     RoleArn?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
