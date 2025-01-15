<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\ListObjectParents;

use Sunaoka\Aws\Structures\Response;

/**
 * @property array<string, string>|null $Parents
 * @property string|null $NextToken
 * @property list<Shapes\ObjectIdentifierAndLinkNameTuple>|null $ParentLinks
 */
class ListObjectParentsResponse extends Response
{
}
