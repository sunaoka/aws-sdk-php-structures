<?php

namespace Sunaoka\Aws\Structures\kendra\DeletePrincipalMapping;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IndexId
 * @property string|null $DataSourceId
 * @property string $GroupId
 * @property int<0, 32535158400000>|null $OrderingId
 */
class DeletePrincipalMappingRequest extends Request
{
    /**
     * @param array{
     *     IndexId: string,
     *     DataSourceId?: string|null,
     *     GroupId: string,
     *     OrderingId?: int<0, 32535158400000>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
