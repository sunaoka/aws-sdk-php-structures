<?php

namespace Sunaoka\Aws\Structures\Kafka\DescribeConfigurationRevision;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Arn
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property string $Description
 * @property int $Revision
 * @property \Psr\Http\Message\StreamInterface $ServerProperties
 */
class DescribeConfigurationRevisionResponse extends Response
{
}
