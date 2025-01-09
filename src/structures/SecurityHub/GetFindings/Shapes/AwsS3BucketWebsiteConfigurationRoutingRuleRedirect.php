<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Hostname
 * @property string $HttpRedirectCode
 * @property string $Protocol
 * @property string $ReplaceKeyPrefixWith
 * @property string $ReplaceKeyWith
 */
class AwsS3BucketWebsiteConfigurationRoutingRuleRedirect extends Shape
{
    /**
     * @param array{
     *     Hostname?: string,
     *     HttpRedirectCode?: string,
     *     Protocol?: string,
     *     ReplaceKeyPrefixWith?: string,
     *     ReplaceKeyWith?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
