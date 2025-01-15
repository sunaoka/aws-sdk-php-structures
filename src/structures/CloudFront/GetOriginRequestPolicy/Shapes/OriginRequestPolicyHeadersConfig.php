<?php

namespace Sunaoka\Aws\Structures\CloudFront\GetOriginRequestPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'none'|'whitelist'|'allViewer'|'allViewerAndWhitelistCloudFront'|'allExcept' $HeaderBehavior
 * @property Headers|null $Headers
 */
class OriginRequestPolicyHeadersConfig extends Shape
{
    /**
     * @param array{
     *     HeaderBehavior: 'none'|'whitelist'|'allViewer'|'allViewerAndWhitelistCloudFront'|'allExcept',
     *     Headers?: Headers|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
