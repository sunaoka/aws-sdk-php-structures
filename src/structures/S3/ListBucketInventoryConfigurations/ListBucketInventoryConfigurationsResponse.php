<?php

namespace Sunaoka\Aws\Structures\S3\ListBucketInventoryConfigurations;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ContinuationToken
 * @property list<Shapes\InventoryConfiguration>|null $InventoryConfigurationList
 * @property bool|null $IsTruncated
 * @property string|null $NextContinuationToken
 */
class ListBucketInventoryConfigurationsResponse extends Response
{
}
