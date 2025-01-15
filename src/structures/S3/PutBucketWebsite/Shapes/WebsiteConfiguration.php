<?php

namespace Sunaoka\Aws\Structures\S3\PutBucketWebsite\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ErrorDocument|null $ErrorDocument
 * @property IndexDocument|null $IndexDocument
 * @property RedirectAllRequestsTo|null $RedirectAllRequestsTo
 * @property list<RoutingRule>|null $RoutingRules
 */
class WebsiteConfiguration extends Shape
{
    /**
     * @param array{
     *     ErrorDocument?: ErrorDocument|null,
     *     IndexDocument?: IndexDocument|null,
     *     RedirectAllRequestsTo?: RedirectAllRequestsTo|null,
     *     RoutingRules?: list<RoutingRule>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
