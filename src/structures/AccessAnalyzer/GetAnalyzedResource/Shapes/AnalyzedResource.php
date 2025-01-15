<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\GetAnalyzedResource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $resourceArn
 * @property 'AWS::S3::Bucket'|'AWS::IAM::Role'|'AWS::SQS::Queue'|'AWS::Lambda::Function'|'AWS::Lambda::LayerVersion'|'AWS::KMS::Key'|'AWS::SecretsManager::Secret'|'AWS::EFS::FileSystem'|'AWS::EC2::Snapshot'|'AWS::ECR::Repository'|'AWS::RDS::DBSnapshot'|'AWS::RDS::DBClusterSnapshot'|'AWS::SNS::Topic'|'AWS::S3Express::DirectoryBucket'|'AWS::DynamoDB::Table'|'AWS::DynamoDB::Stream'|'AWS::IAM::User' $resourceType
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $analyzedAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property bool $isPublic
 * @property list<string>|null $actions
 * @property list<string>|null $sharedVia
 * @property 'ACTIVE'|'ARCHIVED'|'RESOLVED'|null $status
 * @property string $resourceOwnerAccount
 * @property string|null $error
 */
class AnalyzedResource extends Shape
{
    /**
     * @param array{
     *     resourceArn: string,
     *     resourceType: 'AWS::S3::Bucket'|'AWS::IAM::Role'|'AWS::SQS::Queue'|'AWS::Lambda::Function'|'AWS::Lambda::LayerVersion'|'AWS::KMS::Key'|'AWS::SecretsManager::Secret'|'AWS::EFS::FileSystem'|'AWS::EC2::Snapshot'|'AWS::ECR::Repository'|'AWS::RDS::DBSnapshot'|'AWS::RDS::DBClusterSnapshot'|'AWS::SNS::Topic'|'AWS::S3Express::DirectoryBucket'|'AWS::DynamoDB::Table'|'AWS::DynamoDB::Stream'|'AWS::IAM::User',
     *     createdAt: \Aws\Api\DateTimeResult,
     *     analyzedAt: \Aws\Api\DateTimeResult,
     *     updatedAt: \Aws\Api\DateTimeResult,
     *     isPublic: bool,
     *     actions?: list<string>|null,
     *     sharedVia?: list<string>|null,
     *     status?: 'ACTIVE'|'ARCHIVED'|'RESOLVED'|null,
     *     resourceOwnerAccount: string,
     *     error?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
