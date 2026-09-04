<?php

namespace Sunaoka\Aws\Structures\Bedrock\PutAccountDataRetention;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'default'|'none'|'aws_review'|'provider_data_share'|'inherit' $mode
 */
class PutAccountDataRetentionRequest extends Request
{
    /**
     * @param array{mode: 'default'|'none'|'aws_review'|'provider_data_share'|'inherit'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
