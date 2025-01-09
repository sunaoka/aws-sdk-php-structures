<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ErrorDocument
 * @property string $IndexDocumentSuffix
 * @property AwsS3BucketWebsiteConfigurationRedirectTo $RedirectAllRequestsTo
 * @property list<AwsS3BucketWebsiteConfigurationRoutingRule> $RoutingRules
 */
class AwsS3BucketWebsiteConfiguration extends Shape
{
    /**
     * @param array{
     *     ErrorDocument?: string,
     *     IndexDocumentSuffix?: string,
     *     RedirectAllRequestsTo?: AwsS3BucketWebsiteConfigurationRedirectTo,
     *     RoutingRules?: list<AwsS3BucketWebsiteConfigurationRoutingRule>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
