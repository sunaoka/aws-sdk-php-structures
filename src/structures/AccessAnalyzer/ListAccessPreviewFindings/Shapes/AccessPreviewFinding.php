<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\ListAccessPreviewFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string|null $existingFindingId
 * @property 'ACTIVE'|'ARCHIVED'|'RESOLVED'|null $existingFindingStatus
 * @property array<string, string>|null $principal
 * @property list<string>|null $action
 * @property array<string, string>|null $condition
 * @property string|null $resource
 * @property bool|null $isPublic
 * @property 'AWS::S3::Bucket'|'AWS::IAM::Role'|'AWS::SQS::Queue'|'AWS::Lambda::Function'|'AWS::Lambda::LayerVersion'|'AWS::KMS::Key'|'AWS::SecretsManager::Secret'|'AWS::EFS::FileSystem'|'AWS::EC2::Snapshot'|'AWS::ECR::Repository'|'AWS::RDS::DBSnapshot'|'AWS::RDS::DBClusterSnapshot'|'AWS::SNS::Topic'|'AWS::S3Express::DirectoryBucket'|'AWS::DynamoDB::Table'|'AWS::DynamoDB::Stream'|'AWS::IAM::User' $resourceType
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property 'CHANGED'|'NEW'|'UNCHANGED' $changeType
 * @property 'ACTIVE'|'ARCHIVED'|'RESOLVED' $status
 * @property string $resourceOwnerAccount
 * @property string|null $error
 * @property list<FindingSource>|null $sources
 * @property 'APPLICABLE'|'FAILED_TO_EVALUATE_RCP'|'NOT_APPLICABLE'|null $resourceControlPolicyRestriction
 */
class AccessPreviewFinding extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     existingFindingId?: string|null,
     *     existingFindingStatus?: 'ACTIVE'|'ARCHIVED'|'RESOLVED'|null,
     *     principal?: array<string, string>|null,
     *     action?: list<string>|null,
     *     condition?: array<string, string>|null,
     *     resource?: string|null,
     *     isPublic?: bool|null,
     *     resourceType: 'AWS::S3::Bucket'|'AWS::IAM::Role'|'AWS::SQS::Queue'|'AWS::Lambda::Function'|'AWS::Lambda::LayerVersion'|'AWS::KMS::Key'|'AWS::SecretsManager::Secret'|'AWS::EFS::FileSystem'|'AWS::EC2::Snapshot'|'AWS::ECR::Repository'|'AWS::RDS::DBSnapshot'|'AWS::RDS::DBClusterSnapshot'|'AWS::SNS::Topic'|'AWS::S3Express::DirectoryBucket'|'AWS::DynamoDB::Table'|'AWS::DynamoDB::Stream'|'AWS::IAM::User',
     *     createdAt: \Aws\Api\DateTimeResult,
     *     changeType: 'CHANGED'|'NEW'|'UNCHANGED',
     *     status: 'ACTIVE'|'ARCHIVED'|'RESOLVED',
     *     resourceOwnerAccount: string,
     *     error?: string|null,
     *     sources?: list<FindingSource>|null,
     *     resourceControlPolicyRestriction?: 'APPLICABLE'|'FAILED_TO_EVALUATE_RCP'|'NOT_APPLICABLE'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
