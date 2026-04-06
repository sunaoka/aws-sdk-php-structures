<?php

namespace Sunaoka\Aws\Structures\Lambda\ListFunctionVersionsByCapacityProvider;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $CapacityProviderArn
 * @property list<Shapes\FunctionVersionsByCapacityProviderListItem> $FunctionVersions
 * @property string|null $NextMarker
 */
class ListFunctionVersionsByCapacityProviderResponse extends Response
{
}
