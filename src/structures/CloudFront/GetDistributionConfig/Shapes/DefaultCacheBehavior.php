<?php

namespace Sunaoka\Aws\Structures\CloudFront\GetDistributionConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TargetOriginId
 * @property TrustedSigners $TrustedSigners
 * @property TrustedKeyGroups $TrustedKeyGroups
 * @property 'allow-all'|'https-only'|'redirect-to-https' $ViewerProtocolPolicy
 * @property AllowedMethods $AllowedMethods
 * @property bool $SmoothStreaming
 * @property bool $Compress
 * @property LambdaFunctionAssociations $LambdaFunctionAssociations
 * @property FunctionAssociations $FunctionAssociations
 * @property string $FieldLevelEncryptionId
 * @property string $RealtimeLogConfigArn
 * @property string $CachePolicyId
 * @property string $OriginRequestPolicyId
 * @property string $ResponseHeadersPolicyId
 * @property GrpcConfig $GrpcConfig
 * @property ForwardedValues $ForwardedValues
 * @property int $MinTTL
 * @property int $DefaultTTL
 * @property int $MaxTTL
 */
class DefaultCacheBehavior extends Shape
{
    /**
     * @param array{
     *     TargetOriginId: string,
     *     TrustedSigners?: TrustedSigners,
     *     TrustedKeyGroups?: TrustedKeyGroups,
     *     ViewerProtocolPolicy: 'allow-all'|'https-only'|'redirect-to-https',
     *     AllowedMethods?: AllowedMethods,
     *     SmoothStreaming?: bool,
     *     Compress?: bool,
     *     LambdaFunctionAssociations?: LambdaFunctionAssociations,
     *     FunctionAssociations?: FunctionAssociations,
     *     FieldLevelEncryptionId?: string,
     *     RealtimeLogConfigArn?: string,
     *     CachePolicyId?: string,
     *     OriginRequestPolicyId?: string,
     *     ResponseHeadersPolicyId?: string,
     *     GrpcConfig?: GrpcConfig,
     *     ForwardedValues?: ForwardedValues,
     *     MinTTL?: int,
     *     DefaultTTL?: int,
     *     MaxTTL?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
