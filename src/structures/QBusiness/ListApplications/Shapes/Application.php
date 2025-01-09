<?php

namespace Sunaoka\Aws\Structures\QBusiness\ListApplications\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $displayName
 * @property string $applicationId
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property 'CREATING'|'ACTIVE'|'DELETING'|'FAILED'|'UPDATING' $status
 * @property 'AWS_IAM_IDP_SAML'|'AWS_IAM_IDP_OIDC'|'AWS_IAM_IDC'|'AWS_QUICKSIGHT_IDP' $identityType
 * @property QuickSightConfiguration $quickSightConfiguration
 */
class Application extends Shape
{
    /**
     * @param array{
     *     displayName?: string,
     *     applicationId?: string,
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     updatedAt?: \Aws\Api\DateTimeResult,
     *     status?: 'CREATING'|'ACTIVE'|'DELETING'|'FAILED'|'UPDATING',
     *     identityType?: 'AWS_IAM_IDP_SAML'|'AWS_IAM_IDP_OIDC'|'AWS_IAM_IDC'|'AWS_QUICKSIGHT_IDP',
     *     quickSightConfiguration?: QuickSightConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
