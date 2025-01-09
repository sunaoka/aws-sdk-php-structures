<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateListingChangeSet;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $listingId
 * @property string $listingRevision
 * @property 'CREATING'|'ACTIVE'|'INACTIVE' $status
 */
class CreateListingChangeSetResponse extends Response
{
}
