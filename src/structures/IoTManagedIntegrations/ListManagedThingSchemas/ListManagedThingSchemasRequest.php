<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\ListManagedThingSchemas;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Identifier
 * @property string|null $EndpointIdFilter
 * @property string|null $CapabilityIdFilter
 * @property string|null $NextToken
 * @property int<1, 1000>|null $MaxResults
 */
class ListManagedThingSchemasRequest extends Request
{
    /**
     * @param array{
     *     Identifier: string,
     *     EndpointIdFilter?: string|null,
     *     CapabilityIdFilter?: string|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 1000>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
