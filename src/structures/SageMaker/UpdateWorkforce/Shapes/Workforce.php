<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateWorkforce\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $WorkforceName
 * @property string $WorkforceArn
 * @property \Aws\Api\DateTimeResult $LastUpdatedDate
 * @property SourceIpConfig $SourceIpConfig
 * @property string $SubDomain
 * @property CognitoConfig $CognitoConfig
 * @property OidcConfigForResponse $OidcConfig
 * @property \Aws\Api\DateTimeResult $CreateDate
 * @property WorkforceVpcConfigResponse $WorkforceVpcConfig
 * @property 'Initializing'|'Updating'|'Deleting'|'Failed'|'Active' $Status
 * @property string $FailureReason
 */
class Workforce extends Shape
{
    /**
     * @param array{
     *     WorkforceName: string,
     *     WorkforceArn: string,
     *     LastUpdatedDate?: \Aws\Api\DateTimeResult,
     *     SourceIpConfig?: SourceIpConfig,
     *     SubDomain?: string,
     *     CognitoConfig?: CognitoConfig,
     *     OidcConfig?: OidcConfigForResponse,
     *     CreateDate?: \Aws\Api\DateTimeResult,
     *     WorkforceVpcConfig?: WorkforceVpcConfigResponse,
     *     Status?: 'Initializing'|'Updating'|'Deleting'|'Failed'|'Active',
     *     FailureReason?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
