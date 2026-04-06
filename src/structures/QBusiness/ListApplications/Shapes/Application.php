<?php

namespace Sunaoka\Aws\Structures\QBusiness\ListApplications\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $displayName
 * @property string|null $applicationId
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property 'CREATING'|'ACTIVE'|'DELETING'|'FAILED'|'UPDATING'|null $status
 * @property 'AWS_IAM_IDP_SAML'|'AWS_IAM_IDP_OIDC'|'AWS_IAM_IDC'|'AWS_QUICKSIGHT_IDP'|'ANONYMOUS'|null $identityType
 * @property QuickSightConfiguration|null $quickSightConfiguration
 */
class Application extends Shape
{
    /**
     * @param array{
     *     displayName?: string|null,
     *     applicationId?: string|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null,
     *     status?: 'CREATING'|'ACTIVE'|'DELETING'|'FAILED'|'UPDATING'|null,
     *     identityType?: 'AWS_IAM_IDP_SAML'|'AWS_IAM_IDP_OIDC'|'AWS_IAM_IDC'|'AWS_QUICKSIGHT_IDP'|'ANONYMOUS'|null,
     *     quickSightConfiguration?: QuickSightConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
