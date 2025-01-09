<?php

namespace Sunaoka\Aws\Structures\CloudFront\CreateStreamingDistributionWithTags;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\StreamingDistributionConfigWithTags $StreamingDistributionConfigWithTags
 */
class CreateStreamingDistributionWithTagsRequest extends Request
{
    /**
     * @param array{StreamingDistributionConfigWithTags: Shapes\StreamingDistributionConfigWithTags} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
