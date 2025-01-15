<?php

namespace Sunaoka\Aws\Structures\PI\DescribeDimensionKeys;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult|null $AlignedStartTime
 * @property \Aws\Api\DateTimeResult|null $AlignedEndTime
 * @property list<Shapes\ResponsePartitionKey>|null $PartitionKeys
 * @property list<Shapes\DimensionKeyDescription>|null $Keys
 * @property string|null $NextToken
 */
class DescribeDimensionKeysResponse extends Response
{
}
