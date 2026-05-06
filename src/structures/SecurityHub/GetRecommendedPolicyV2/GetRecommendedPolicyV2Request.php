<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetRecommendedPolicyV2;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MetadataUid
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class GetRecommendedPolicyV2Request extends Request
{
    /**
     * @param array{
     *     MetadataUid: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
