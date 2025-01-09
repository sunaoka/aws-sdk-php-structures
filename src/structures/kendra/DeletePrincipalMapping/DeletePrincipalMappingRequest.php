<?php

namespace Sunaoka\Aws\Structures\kendra\DeletePrincipalMapping;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IndexId
 * @property string $DataSourceId
 * @property string $GroupId
 * @property int<0, 32535158400000> $OrderingId
 */
class DeletePrincipalMappingRequest extends Request
{
    /**
     * @param array{
     *     IndexId: string,
     *     DataSourceId?: string,
     *     GroupId: string,
     *     OrderingId?: int<0, 32535158400000>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
