<?php

namespace Sunaoka\Aws\Structures\Kafka\DescribeConfigurationRevision;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Arn
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property string|null $Description
 * @property int|null $Revision
 * @property \Psr\Http\Message\StreamInterface|null $ServerProperties
 */
class DescribeConfigurationRevisionResponse extends Response
{
}
