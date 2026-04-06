<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\ValidatePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'DE'|'EN'|'ES'|'FR'|'IT'|'JA'|'KO'|'PT_BR'|'ZH_CN'|'ZH_TW'|null $locale
 * @property int|null $maxResults
 * @property string|null $nextToken
 * @property string $policyDocument
 * @property 'IDENTITY_POLICY'|'RESOURCE_POLICY'|'SERVICE_CONTROL_POLICY'|'RESOURCE_CONTROL_POLICY' $policyType
 * @property 'AWS::S3::Bucket'|'AWS::S3::AccessPoint'|'AWS::S3::MultiRegionAccessPoint'|'AWS::S3ObjectLambda::AccessPoint'|'AWS::IAM::AssumeRolePolicyDocument'|'AWS::DynamoDB::Table'|null $validatePolicyResourceType
 */
class ValidatePolicyRequest extends Request
{
    /**
     * @param array{
     *     locale?: 'DE'|'EN'|'ES'|'FR'|'IT'|'JA'|'KO'|'PT_BR'|'ZH_CN'|'ZH_TW'|null,
     *     maxResults?: int|null,
     *     nextToken?: string|null,
     *     policyDocument: string,
     *     policyType: 'IDENTITY_POLICY'|'RESOURCE_POLICY'|'SERVICE_CONTROL_POLICY'|'RESOURCE_CONTROL_POLICY',
     *     validatePolicyResourceType?: 'AWS::S3::Bucket'|'AWS::S3::AccessPoint'|'AWS::S3::MultiRegionAccessPoint'|'AWS::S3ObjectLambda::AccessPoint'|'AWS::IAM::AssumeRolePolicyDocument'|'AWS::DynamoDB::Table'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
