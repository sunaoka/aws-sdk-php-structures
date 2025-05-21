<?php

namespace Sunaoka\Aws\Structures\QBusiness\CheckDocumentAccess;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\AssociatedGroup>|null $userGroups
 * @property list<Shapes\AssociatedUser>|null $userAliases
 * @property bool|null $hasAccess
 * @property Shapes\DocumentAcl|null $documentAcl
 */
class CheckDocumentAccessResponse extends Response
{
}
