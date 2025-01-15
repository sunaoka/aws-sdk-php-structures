<?php

namespace Sunaoka\Aws\Structures\ResourceGroups\ListGroupResources;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\ListGroupResourcesItem>|null $Resources
 * @property list<Shapes\ResourceIdentifier>|null $ResourceIdentifiers
 * @property string|null $NextToken
 * @property list<Shapes\QueryError>|null $QueryErrors
 */
class ListGroupResourcesResponse extends Response
{
}
