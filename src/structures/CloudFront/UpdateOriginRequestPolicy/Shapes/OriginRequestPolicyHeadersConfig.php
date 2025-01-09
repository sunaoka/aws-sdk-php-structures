<?php

namespace Sunaoka\Aws\Structures\CloudFront\UpdateOriginRequestPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'none'|'whitelist'|'allViewer'|'allViewerAndWhitelistCloudFront'|'allExcept' $HeaderBehavior
 * @property Headers $Headers
 */
class OriginRequestPolicyHeadersConfig extends Shape
{
    /**
     * @param array{
     *     HeaderBehavior: 'none'|'whitelist'|'allViewer'|'allViewerAndWhitelistCloudFront'|'allExcept',
     *     Headers?: Headers
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
