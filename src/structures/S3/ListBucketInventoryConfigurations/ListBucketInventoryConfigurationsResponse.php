<?php

namespace Sunaoka\Aws\Structures\S3\ListBucketInventoryConfigurations;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ContinuationToken
 * @property list<Shapes\InventoryConfiguration> $InventoryConfigurationList
 * @property bool $IsTruncated
 * @property string $NextContinuationToken
 */
class ListBucketInventoryConfigurationsResponse extends Response
{
}
