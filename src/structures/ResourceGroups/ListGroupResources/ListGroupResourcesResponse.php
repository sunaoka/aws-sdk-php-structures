<?php

namespace Sunaoka\Aws\Structures\ResourceGroups\ListGroupResources;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\ListGroupResourcesItem> $Resources
 * @property list<Shapes\ResourceIdentifier> $ResourceIdentifiers
 * @property string $NextToken
 * @property list<Shapes\QueryError> $QueryErrors
 */
class ListGroupResourcesResponse extends Response
{
}
