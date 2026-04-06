<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\ListAnalyzedResources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $analyzerArn
 * @property 'AWS::S3::Bucket'|'AWS::IAM::Role'|'AWS::SQS::Queue'|'AWS::Lambda::Function'|'AWS::Lambda::LayerVersion'|'AWS::KMS::Key'|'AWS::SecretsManager::Secret'|'AWS::EFS::FileSystem'|'AWS::EC2::Snapshot'|'AWS::ECR::Repository'|'AWS::RDS::DBSnapshot'|'AWS::RDS::DBClusterSnapshot'|'AWS::SNS::Topic'|'AWS::S3Express::DirectoryBucket'|'AWS::DynamoDB::Table'|'AWS::DynamoDB::Stream'|'AWS::IAM::User'|null $resourceType
 * @property string|null $nextToken
 * @property int|null $maxResults
 */
class ListAnalyzedResourcesRequest extends Request
{
    /**
     * @param array{
     *     analyzerArn: string,
     *     resourceType?: 'AWS::S3::Bucket'|'AWS::IAM::Role'|'AWS::SQS::Queue'|'AWS::Lambda::Function'|'AWS::Lambda::LayerVersion'|'AWS::KMS::Key'|'AWS::SecretsManager::Secret'|'AWS::EFS::FileSystem'|'AWS::EC2::Snapshot'|'AWS::ECR::Repository'|'AWS::RDS::DBSnapshot'|'AWS::RDS::DBClusterSnapshot'|'AWS::SNS::Topic'|'AWS::S3Express::DirectoryBucket'|'AWS::DynamoDB::Table'|'AWS::DynamoDB::Stream'|'AWS::IAM::User'|null,
     *     nextToken?: string|null,
     *     maxResults?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
