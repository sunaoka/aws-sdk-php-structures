<?php

namespace Sunaoka\Aws\Structures\DataZone\GetListing;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $domainId
 * @property string $id
 * @property string $listingRevision
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property string|null $createdBy
 * @property string|null $updatedBy
 * @property Shapes\ListingItem|null $item
 * @property string|null $name
 * @property string|null $description
 * @property 'CREATING'|'ACTIVE'|'INACTIVE'|null $status
 */
class GetListingResponse extends Response
{
}
