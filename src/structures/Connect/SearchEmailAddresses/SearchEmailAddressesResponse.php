<?php

namespace Sunaoka\Aws\Structures\Connect\SearchEmailAddresses;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $NextToken
 * @property list<Shapes\EmailAddressMetadata>|null $EmailAddresses
 * @property int|null $ApproximateTotalCount
 */
class SearchEmailAddressesResponse extends Response
{
}
