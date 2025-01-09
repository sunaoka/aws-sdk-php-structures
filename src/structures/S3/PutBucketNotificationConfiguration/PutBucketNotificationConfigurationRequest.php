<?php

namespace Sunaoka\Aws\Structures\S3\PutBucketNotificationConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Bucket
 * @property Shapes\NotificationConfiguration $NotificationConfiguration
 * @property string $ExpectedBucketOwner
 * @property bool $SkipDestinationValidation
 */
class PutBucketNotificationConfigurationRequest extends Request
{
    /**
     * @param array{
     *     Bucket: string,
     *     NotificationConfiguration: Shapes\NotificationConfiguration,
     *     ExpectedBucketOwner?: string,
     *     SkipDestinationValidation?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
