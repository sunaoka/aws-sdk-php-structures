<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\GetFindingV2;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult $analyzedAt
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $error
 * @property string $id
 * @property string $nextToken
 * @property string $resource
 * @property 'AWS::S3::Bucket'|'AWS::IAM::Role'|'AWS::SQS::Queue'|'AWS::Lambda::Function'|'AWS::Lambda::LayerVersion'|'AWS::KMS::Key'|'AWS::SecretsManager::Secret'|'AWS::EFS::FileSystem'|'AWS::EC2::Snapshot'|'AWS::ECR::Repository'|'AWS::RDS::DBSnapshot'|'AWS::RDS::DBClusterSnapshot'|'AWS::SNS::Topic'|'AWS::S3Express::DirectoryBucket'|'AWS::DynamoDB::Table'|'AWS::DynamoDB::Stream'|'AWS::IAM::User' $resourceType
 * @property string $resourceOwnerAccount
 * @property 'ACTIVE'|'ARCHIVED'|'RESOLVED' $status
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property list<Shapes\FindingDetails> $findingDetails
 * @property 'ExternalAccess'|'UnusedIAMRole'|'UnusedIAMUserAccessKey'|'UnusedIAMUserPassword'|'UnusedPermission' $findingType
 */
class GetFindingV2Response extends Response
{
}
