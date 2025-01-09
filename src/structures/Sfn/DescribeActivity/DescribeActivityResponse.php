<?php

namespace Sunaoka\Aws\Structures\Sfn\DescribeActivity;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $activityArn
 * @property string $name
 * @property \Aws\Api\DateTimeResult $creationDate
 * @property Shapes\EncryptionConfiguration $encryptionConfiguration
 */
class DescribeActivityResponse extends Response
{
}
