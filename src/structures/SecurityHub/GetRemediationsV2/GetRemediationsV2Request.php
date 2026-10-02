<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetRemediationsV2;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $TargetUid
 * @property string|null $MetadataUid
 * @property Shapes\RemediationFilters|null $Filters
 * @property bool|null $ShowGuidance
 * @property 'All'|'AwsCli'|'Cli'|'Python'|'Terraform'|'Cdk'|'CloudFormation'|'IaC'|'Template'|null $GuidanceFormat
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class GetRemediationsV2Request extends Request
{
    /**
     * @param array{
     *     TargetUid?: string|null,
     *     MetadataUid?: string|null,
     *     Filters?: Shapes\RemediationFilters|null,
     *     ShowGuidance?: bool|null,
     *     GuidanceFormat?: 'All'|'AwsCli'|'Cli'|'Python'|'Terraform'|'Cdk'|'CloudFormation'|'IaC'|'Template'|null,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
