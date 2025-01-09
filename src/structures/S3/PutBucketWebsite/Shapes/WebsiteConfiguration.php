<?php

namespace Sunaoka\Aws\Structures\S3\PutBucketWebsite\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ErrorDocument $ErrorDocument
 * @property IndexDocument $IndexDocument
 * @property RedirectAllRequestsTo $RedirectAllRequestsTo
 * @property list<RoutingRule> $RoutingRules
 */
class WebsiteConfiguration extends Shape
{
    /**
     * @param array{
     *     ErrorDocument?: ErrorDocument,
     *     IndexDocument?: IndexDocument,
     *     RedirectAllRequestsTo?: RedirectAllRequestsTo,
     *     RoutingRules?: list<RoutingRule>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
