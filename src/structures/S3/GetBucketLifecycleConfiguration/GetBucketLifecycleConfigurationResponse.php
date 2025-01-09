<?php

namespace Sunaoka\Aws\Structures\S3\GetBucketLifecycleConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\LifecycleRule> $Rules
 * @property 'varies_by_storage_class'|'all_storage_classes_128K' $TransitionDefaultMinimumObjectSize
 */
class GetBucketLifecycleConfigurationResponse extends Response
{
}
