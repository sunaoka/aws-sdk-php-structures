<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\ListObjectParents;

use Sunaoka\Aws\Structures\Response;

/**
 * @property array<string, string> $Parents
 * @property string $NextToken
 * @property list<Shapes\ObjectIdentifierAndLinkNameTuple> $ParentLinks
 */
class ListObjectParentsResponse extends Response
{
}
