<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\GetFinding\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property array<string, string> $principal
 * @property list<string> $action
 * @property string $resource
 * @property bool $isPublic
 * @property 'AWS::S3::Bucket'|'AWS::IAM::Role'|'AWS::SQS::Queue'|'AWS::Lambda::Function'|'AWS::Lambda::LayerVersion'|'AWS::KMS::Key'|'AWS::SecretsManager::Secret'|'AWS::EFS::FileSystem'|'AWS::EC2::Snapshot'|'AWS::ECR::Repository'|'AWS::RDS::DBSnapshot'|'AWS::RDS::DBClusterSnapshot'|'AWS::SNS::Topic'|'AWS::S3Express::DirectoryBucket'|'AWS::DynamoDB::Table'|'AWS::DynamoDB::Stream'|'AWS::IAM::User' $resourceType
 * @property array<string, string> $condition
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $analyzedAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property 'ACTIVE'|'ARCHIVED'|'RESOLVED' $status
 * @property string $resourceOwnerAccount
 * @property string $error
 * @property list<FindingSource> $sources
 * @property 'APPLICABLE'|'FAILED_TO_EVALUATE_RCP'|'NOT_APPLICABLE' $resourceControlPolicyRestriction
 */
class Finding extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     principal?: array<string, string>,
     *     action?: list<string>,
     *     resource?: string,
     *     isPublic?: bool,
     *     resourceType: 'AWS::S3::Bucket'|'AWS::IAM::Role'|'AWS::SQS::Queue'|'AWS::Lambda::Function'|'AWS::Lambda::LayerVersion'|'AWS::KMS::Key'|'AWS::SecretsManager::Secret'|'AWS::EFS::FileSystem'|'AWS::EC2::Snapshot'|'AWS::ECR::Repository'|'AWS::RDS::DBSnapshot'|'AWS::RDS::DBClusterSnapshot'|'AWS::SNS::Topic'|'AWS::S3Express::DirectoryBucket'|'AWS::DynamoDB::Table'|'AWS::DynamoDB::Stream'|'AWS::IAM::User',
     *     condition: array<string, string>,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     analyzedAt: \Aws\Api\DateTimeResult,
     *     updatedAt: \Aws\Api\DateTimeResult,
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
