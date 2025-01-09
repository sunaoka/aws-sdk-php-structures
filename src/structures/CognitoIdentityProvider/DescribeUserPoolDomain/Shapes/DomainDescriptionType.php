<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\DescribeUserPoolDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $UserPoolId
 * @property string $AWSAccountId
 * @property string $Domain
 * @property string $S3Bucket
 * @property string $CloudFrontDistribution
 * @property string $Version
 * @property 'CREATING'|'DELETING'|'UPDATING'|'ACTIVE'|'FAILED' $Status
 * @property CustomDomainConfigType $CustomDomainConfig
 * @property int $ManagedLoginVersion
 */
class DomainDescriptionType extends Shape
{
    /**
     * @param array{
     *     UserPoolId?: string,
     *     AWSAccountId?: string,
     *     Domain?: string,
     *     S3Bucket?: string,
     *     CloudFrontDistribution?: string,
     *     Version?: string,
     *     Status?: 'CREATING'|'DELETING'|'UPDATING'|'ACTIVE'|'FAILED',
     *     CustomDomainConfig?: CustomDomainConfigType,
     *     ManagedLoginVersion?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
