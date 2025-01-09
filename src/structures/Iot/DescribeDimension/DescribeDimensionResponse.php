<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeDimension;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $name
 * @property string $arn
 * @property 'TOPIC_FILTER' $type
 * @property list<string> $stringValues
 * @property \Aws\Api\DateTimeResult $creationDate
 * @property \Aws\Api\DateTimeResult $lastModifiedDate
 */
class DescribeDimensionResponse extends Response
{
}
