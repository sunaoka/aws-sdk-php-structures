<?php

namespace Sunaoka\Aws\Structures\DataZone\GetListing;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $createdBy
 * @property string|null $description
 * @property string $domainId
 * @property string $id
 * @property Shapes\ListingItem|null $item
 * @property string $listingRevision
 * @property string|null $name
 * @property 'CREATING'|'ACTIVE'|'INACTIVE'|null $status
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property string|null $updatedBy
 */
class GetListingResponse extends Response
{
}
