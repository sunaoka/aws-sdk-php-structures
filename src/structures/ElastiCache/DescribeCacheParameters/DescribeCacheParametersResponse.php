<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DescribeCacheParameters;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Marker
 * @property list<Shapes\Parameter>|null $Parameters
 * @property list<Shapes\CacheNodeTypeSpecificParameter>|null $CacheNodeTypeSpecificParameters
 */
class DescribeCacheParametersResponse extends Response
{
}
