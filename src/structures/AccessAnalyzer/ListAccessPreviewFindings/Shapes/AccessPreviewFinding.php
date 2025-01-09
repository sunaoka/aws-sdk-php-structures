<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\ListAccessPreviewFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $existingFindingId
 * @property 'ACTIVE'|'ARCHIVED'|'RESOLVED' $existingFindingStatus
 * @property array<string, string> $principal
 * @property list<string> $action
 * @property array<string, string> $condition
 * @property string $resource
 * @property bool $isPublic
 * @property 'AWS::S3::Bucket'|'AWS::IAM::Role'|'AWS::SQS::Queue'|'AWS::Lambda::Function'|'AWS::Lambda::LayerVersion'|'AWS::KMS::Key'|'AWS::SecretsManager::Secret'|'AWS::EFS::FileSystem'|'AWS::EC2::Snapshot'|'AWS::ECR::Repository'|'AWS::RDS::DBSnapshot'|'AWS::RDS::DBClusterSnapshot'|'AWS::SNS::Topic'|'AWS::S3Express::DirectoryBucket'|'AWS::DynamoDB::Table'|'AWS::DynamoDB::Stream'|'AWS::IAM::User' $resourceType
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property 'CHANGED'|'NEW'|'UNCHANGED' $changeType
 * @property 'ACTIVE'|'ARCHIVED'|'RESOLVED' $status
 * @property string $resourceOwnerAccount
 * @property string $error
 * @property list<FindingSource> $sources
 * @property 'APPLICABLE'|'FAILED_TO_EVALUATE_RCP'|'NOT_APPLICABLE' $resourceControlPolicyRestriction
 */
class AccessPreviewFinding extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     existingFindingId?: string,
     *     existingFindingStatus?: 'ACTIVE'|'ARCHIVED'|'RESOLVED',
     *     principal?: array<string, string>,
     *     action?: list<string>,
     *     condition?: array<string, string>,
     *     resource?: string,
     *     isPublic?: bool,
     *     resourceType: 'AWS::S3::Bucket'|'AWS::IAM::Role'|'AWS::SQS::Queue'|'AWS::Lambda::Function'|'AWS::Lambda::LayerVersion'|'AWS::KMS::Key'|'AWS::SecretsManager::Secret'|'AWS::EFS::FileSystem'|'AWS::EC2::Snapshot'|'AWS::ECR::Repository'|'AWS::RDS::DBSnapshot'|'AWS::RDS::DBClusterSnapshot'|'AWS::SNS::Topic'|'AWS::S3Express::DirectoryBucket'|'AWS::DynamoDB::Table'|'AWS::DynamoDB::Stream'|'AWS::IAM::User',
     *     createdAt: \Aws\Api\DateTimeResult,
     *     changeType: 'CHANGED'|'NEW'|'UNCHANGED',
     *     status: 'ACTIVE'|'ARCHIVED'|'RESOLVED',
     *     resourceOwnerAccount: string,
     *     error?: string,
     *     sources?: list<FindingSource>,
     *     resourceControlPolicyRestriction?: 'APPLICABLE'|'FAILED_TO_EVALUATE_RCP'|'NOT_APPLICABLE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
