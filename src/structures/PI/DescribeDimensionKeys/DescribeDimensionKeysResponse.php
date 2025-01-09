<?php

namespace Sunaoka\Aws\Structures\PI\DescribeDimensionKeys;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult $AlignedStartTime
 * @property \Aws\Api\DateTimeResult $AlignedEndTime
 * @property list<Shapes\ResponsePartitionKey> $PartitionKeys
 * @property list<Shapes\DimensionKeyDescription> $Keys
 * @property string $NextToken
 */
class DescribeDimensionKeysResponse extends Response
{
}
