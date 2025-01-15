<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeDimension;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $name
 * @property string|null $arn
 * @property 'TOPIC_FILTER'|null $type
 * @property list<string>|null $stringValues
 * @property \Aws\Api\DateTimeResult|null $creationDate
 * @property \Aws\Api\DateTimeResult|null $lastModifiedDate
 */
class DescribeDimensionResponse extends Response
{
}
