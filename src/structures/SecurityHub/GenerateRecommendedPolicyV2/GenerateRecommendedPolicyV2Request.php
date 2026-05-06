<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GenerateRecommendedPolicyV2;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MetadataUid
 */
class GenerateRecommendedPolicyV2Request extends Request
{
    /**
     * @param array{MetadataUid: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
