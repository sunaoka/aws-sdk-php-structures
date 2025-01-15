<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Hostname
 * @property string|null $HttpRedirectCode
 * @property string|null $Protocol
 * @property string|null $ReplaceKeyPrefixWith
 * @property string|null $ReplaceKeyWith
 */
class AwsS3BucketWebsiteConfigurationRoutingRuleRedirect extends Shape
{
    /**
     * @param array{
     *     Hostname?: string|null,
     *     HttpRedirectCode?: string|null,
     *     Protocol?: string|null,
     *     ReplaceKeyPrefixWith?: string|null,
     *     ReplaceKeyWith?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
