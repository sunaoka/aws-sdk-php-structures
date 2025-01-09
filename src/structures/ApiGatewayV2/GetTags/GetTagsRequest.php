<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\GetTags;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceArn
 */
class GetTagsRequest extends Request
{
    /**
     * @param array{ResourceArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
