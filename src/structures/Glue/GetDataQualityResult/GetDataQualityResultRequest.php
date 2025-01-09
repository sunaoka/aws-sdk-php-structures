<?php

namespace Sunaoka\Aws\Structures\Glue\GetDataQualityResult;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResultId
 */
class GetDataQualityResultRequest extends Request
{
    /**
     * @param array{ResultId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
