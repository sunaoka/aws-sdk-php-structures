<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\ValidatePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'DE'|'EN'|'ES'|'FR'|'IT'|'JA'|'KO'|'PT_BR'|'ZH_CN'|'ZH_TW' $locale
 * @property int $maxResults
 * @property string $nextToken
 * @property string $policyDocument
 * @property 'IDENTITY_POLICY'|'RESOURCE_POLICY'|'SERVICE_CONTROL_POLICY'|'RESOURCE_CONTROL_POLICY' $policyType
 * @property 'AWS::S3::Bucket'|'AWS::S3::AccessPoint'|'AWS::S3::MultiRegionAccessPoint'|'AWS::S3ObjectLambda::AccessPoint'|'AWS::IAM::AssumeRolePolicyDocument'|'AWS::DynamoDB::Table' $validatePolicyResourceType
 */
class ValidatePolicyRequest extends Request
{
    /**
     * @param array{
     *     locale?: 'DE'|'EN'|'ES'|'FR'|'IT'|'JA'|'KO'|'PT_BR'|'ZH_CN'|'ZH_TW',
     *     maxResults?: int,
     *     nextToken?: string,
     *     policyDocument: string,
     *     policyType: 'IDENTITY_POLICY'|'RESOURCE_POLICY'|'SERVICE_CONTROL_POLICY'|'RESOURCE_CONTROL_POLICY',
     *     validatePolicyResourceType?: 'AWS::S3::Bucket'|'AWS::S3::AccessPoint'|'AWS::S3::MultiRegionAccessPoint'|'AWS::S3ObjectLambda::AccessPoint'|'AWS::IAM::AssumeRolePolicyDocument'|'AWS::DynamoDB::Table'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
