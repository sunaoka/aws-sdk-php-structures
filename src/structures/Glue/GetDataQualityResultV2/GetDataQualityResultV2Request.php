<?php

namespace Sunaoka\Aws\Structures\Glue\GetDataQualityResultV2;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResultId
 */
class GetDataQualityResultV2Request extends Request
{
    /**
     * @param array{ResultId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
