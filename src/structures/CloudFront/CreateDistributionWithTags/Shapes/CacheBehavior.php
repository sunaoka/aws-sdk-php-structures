<?php

namespace Sunaoka\Aws\Structures\CloudFront\CreateDistributionWithTags\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PathPattern
 * @property string $TargetOriginId
 * @property TrustedSigners|null $TrustedSigners
 * @property TrustedKeyGroups|null $TrustedKeyGroups
 * @property 'allow-all'|'https-only'|'redirect-to-https' $ViewerProtocolPolicy
 * @property AllowedMethods|null $AllowedMethods
 * @property bool|null $SmoothStreaming
 * @property bool|null $Compress
 * @property LambdaFunctionAssociations|null $LambdaFunctionAssociations
 * @property FunctionAssociations|null $FunctionAssociations
 * @property string|null $FieldLevelEncryptionId
 * @property string|null $RealtimeLogConfigArn
 * @property string|null $CachePolicyId
 * @property string|null $OriginRequestPolicyId
 * @property string|null $ResponseHeadersPolicyId
 * @property GrpcConfig|null $GrpcConfig
 * @property ForwardedValues|null $ForwardedValues
 * @property int|null $MinTTL
 * @property int|null $DefaultTTL
 * @property int|null $MaxTTL
 */
class CacheBehavior extends Shape
{
    /**
     * @param array{
     *     PathPattern: string,
     *     TargetOriginId: string,
     *     TrustedSigners?: TrustedSigners|null,
     *     TrustedKeyGroups?: TrustedKeyGroups|null,
     *     ViewerProtocolPolicy: 'allow-all'|'https-only'|'redirect-to-https',
     *     AllowedMethods?: AllowedMethods|null,
     *     SmoothStreaming?: bool|null,
     *     Compress?: bool|null,
     *     LambdaFunctionAssociations?: LambdaFunctionAssociations|null,
     *     FunctionAssociations?: FunctionAssociations|null,
     *     FieldLevelEncryptionId?: string|null,
     *     RealtimeLogConfigArn?: string|null,
     *     CachePolicyId?: string|null,
     *     OriginRequestPolicyId?: string|null,
     *     ResponseHeadersPolicyId?: string|null,
     *     GrpcConfig?: GrpcConfig|null,
     *     ForwardedValues?: ForwardedValues|null,
     *     MinTTL?: int|null,
     *     DefaultTTL?: int|null,
     *     MaxTTL?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
