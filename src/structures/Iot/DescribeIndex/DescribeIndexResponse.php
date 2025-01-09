<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeIndex;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $indexName
 * @property 'ACTIVE'|'BUILDING'|'REBUILDING' $indexStatus
 * @property string $schema
 */
class DescribeIndexResponse extends Response
{
}
