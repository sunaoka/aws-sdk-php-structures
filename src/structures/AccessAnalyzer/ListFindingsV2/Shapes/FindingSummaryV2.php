<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\ListFindingsV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $analyzedAt
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string|null $error
 * @property string $id
 * @property string|null $resource
 * @property 'AWS::S3::Bucket'|'AWS::IAM::Role'|'AWS::SQS::Queue'|'AWS::Lambda::Function'|'AWS::Lambda::LayerVersion'|'AWS::KMS::Key'|'AWS::SecretsManager::Secret'|'AWS::EFS::FileSystem'|'AWS::EC2::Snapshot'|'AWS::ECR::Repository'|'AWS::RDS::DBSnapshot'|'AWS::RDS::DBClusterSnapshot'|'AWS::SNS::Topic'|'AWS::S3Express::DirectoryBucket'|'AWS::DynamoDB::Table'|'AWS::DynamoDB::Stream'|'AWS::IAM::User' $resourceType
 * @property string $resourceOwnerAccount
 * @property 'ACTIVE'|'ARCHIVED'|'RESOLVED' $status
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property 'ExternalAccess'|'UnusedIAMRole'|'UnusedIAMUserAccessKey'|'UnusedIAMUserPassword'|'UnusedPermission'|'InternalAccess'|null $findingType
 */
class FindingSummaryV2 extends Shape
{
    /**
     * @param array{
     *     analyzedAt: \Aws\Api\DateTimeResult,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     error?: string|null,
     *     id: string,
     *     resource?: string|null,
     *     resourceType: 'AWS::S3::Bucket'|'AWS::IAM::Role'|'AWS::SQS::Queue'|'AWS::Lambda::Function'|'AWS::Lambda::LayerVersion'|'AWS::KMS::Key'|'AWS::SecretsManager::Secret'|'AWS::EFS::FileSystem'|'AWS::EC2::Snapshot'|'AWS::ECR::Repository'|'AWS::RDS::DBSnapshot'|'AWS::RDS::DBClusterSnapshot'|'AWS::SNS::Topic'|'AWS::S3Express::DirectoryBucket'|'AWS::DynamoDB::Table'|'AWS::DynamoDB::Stream'|'AWS::IAM::User',
     *     resourceOwnerAccount: string,
     *     status: 'ACTIVE'|'ARCHIVED'|'RESOLVED',
     *     updatedAt: \Aws\Api\DateTimeResult,
     *     findingType?: 'ExternalAccess'|'UnusedIAMRole'|'UnusedIAMUserAccessKey'|'UnusedIAMUserPassword'|'UnusedPermission'|'InternalAccess'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
