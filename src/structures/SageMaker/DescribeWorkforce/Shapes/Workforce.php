<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeWorkforce\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $WorkforceName
 * @property string $WorkforceArn
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedDate
 * @property SourceIpConfig|null $SourceIpConfig
 * @property string|null $SubDomain
 * @property CognitoConfig|null $CognitoConfig
 * @property OidcConfigForResponse|null $OidcConfig
 * @property \Aws\Api\DateTimeResult|null $CreateDate
 * @property WorkforceVpcConfigResponse|null $WorkforceVpcConfig
 * @property 'Initializing'|'Updating'|'Deleting'|'Failed'|'Active'|null $Status
 * @property string|null $FailureReason
 */
class Workforce extends Shape
{
    /**
     * @param array{
     *     WorkforceName: string,
     *     WorkforceArn: string,
     *     LastUpdatedDate?: \Aws\Api\DateTimeResult|null,
     *     SourceIpConfig?: SourceIpConfig|null,
     *     SubDomain?: string|null,
     *     CognitoConfig?: CognitoConfig|null,
     *     OidcConfig?: OidcConfigForResponse|null,
     *     CreateDate?: \Aws\Api\DateTimeResult|null,
     *     WorkforceVpcConfig?: WorkforceVpcConfigResponse|null,
     *     Status?: 'Initializing'|'Updating'|'Deleting'|'Failed'|'Active'|null,
     *     FailureReason?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
