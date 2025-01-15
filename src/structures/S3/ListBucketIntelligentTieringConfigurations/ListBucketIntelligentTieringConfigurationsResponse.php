<?php

namespace Sunaoka\Aws\Structures\S3\ListBucketIntelligentTieringConfigurations;

use Sunaoka\Aws\Structures\Response;

/**
 * @property bool|null $IsTruncated
 * @property string|null $ContinuationToken
 * @property string|null $NextContinuationToken
 * @property list<Shapes\IntelligentTieringConfiguration>|null $IntelligentTieringConfigurationList
 */
class ListBucketIntelligentTieringConfigurationsResponse extends Response
{
}
