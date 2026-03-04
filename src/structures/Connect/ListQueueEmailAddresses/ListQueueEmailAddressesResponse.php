<?php

namespace Sunaoka\Aws\Structures\Connect\ListQueueEmailAddresses;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $NextToken
 * @property list<Shapes\EmailAddressSummary>|null $EmailAddressMetadataList
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 * @property string|null $LastModifiedRegion
 */
class ListQueueEmailAddressesResponse extends Response
{
}
