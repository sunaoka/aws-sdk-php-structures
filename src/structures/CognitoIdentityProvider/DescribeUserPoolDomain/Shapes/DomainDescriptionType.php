<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\DescribeUserPoolDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $UserPoolId
 * @property string|null $AWSAccountId
 * @property string|null $Domain
 * @property string|null $S3Bucket
 * @property string|null $CloudFrontDistribution
 * @property string|null $Version
 * @property 'CREATING'|'DELETING'|'UPDATING'|'ACTIVE'|'FAILED'|null $Status
 * @property CustomDomainConfigType|null $CustomDomainConfig
 * @property int|null $ManagedLoginVersion
 */
class DomainDescriptionType extends Shape
{
    /**
     * @param array{
     *     UserPoolId?: string|null,
     *     AWSAccountId?: string|null,
     *     Domain?: string|null,
     *     S3Bucket?: string|null,
     *     CloudFrontDistribution?: string|null,
     *     Version?: string|null,
     *     Status?: 'CREATING'|'DELETING'|'UPDATING'|'ACTIVE'|'FAILED'|null,
     *     CustomDomainConfig?: CustomDomainConfigType|null,
     *     ManagedLoginVersion?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
