<?php

namespace Sunaoka\Aws\Structures\Lambda\GetLayerVersionByArn;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Arn
 */
class GetLayerVersionByArnRequest extends Request
{
    /**
     * @param array{Arn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
