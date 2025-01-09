<?php

namespace Sunaoka\Aws\Structures\DataZone\GetListing;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $createdBy
 * @property string $description
 * @property string $domainId
 * @property string $id
 * @property Shapes\ListingItem $item
 * @property string $listingRevision
 * @property string $name
 * @property 'CREATING'|'ACTIVE'|'INACTIVE' $status
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property string $updatedBy
 */
class GetListingResponse extends Response
{
}
