<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeIndex;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $indexName
 * @property 'ACTIVE'|'BUILDING'|'REBUILDING'|null $indexStatus
 * @property string|null $schema
 */
class DescribeIndexResponse extends Response
{
}
