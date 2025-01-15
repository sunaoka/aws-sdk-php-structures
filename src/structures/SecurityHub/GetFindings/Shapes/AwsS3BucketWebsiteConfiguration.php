<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ErrorDocument
 * @property string|null $IndexDocumentSuffix
 * @property AwsS3BucketWebsiteConfigurationRedirectTo|null $RedirectAllRequestsTo
 * @property list<AwsS3BucketWebsiteConfigurationRoutingRule>|null $RoutingRules
 */
class AwsS3BucketWebsiteConfiguration extends Shape
{
    /**
     * @param array{
     *     ErrorDocument?: string|null,
     *     IndexDocumentSuffix?: string|null,
     *     RedirectAllRequestsTo?: AwsS3BucketWebsiteConfigurationRedirectTo|null,
     *     RoutingRules?: list<AwsS3BucketWebsiteConfigurationRoutingRule>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
