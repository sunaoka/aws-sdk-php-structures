<?php

namespace Sunaoka\Aws\Structures\S3\ListBucketIntelligentTieringConfigurations;

use Sunaoka\Aws\Structures\Response;

/**
 * @property bool $IsTruncated
 * @property string $ContinuationToken
 * @property string $NextContinuationToken
 * @property list<Shapes\IntelligentTieringConfiguration> $IntelligentTieringConfigurationList
 */
class ListBucketIntelligentTieringConfigurationsResponse extends Response
{
}
