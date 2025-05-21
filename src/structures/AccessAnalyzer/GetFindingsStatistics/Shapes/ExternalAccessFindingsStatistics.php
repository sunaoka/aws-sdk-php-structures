<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\GetFindingsStatistics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<'AWS::S3::Bucket'|'AWS::IAM::Role'|'AWS::SQS::Queue'|'AWS::Lambda::Function'|'AWS::Lambda::LayerVersion'|'AWS::KMS::Key'|'AWS::SecretsManager::Secret'|'AWS::EFS::FileSystem'|'AWS::EC2::Snapshot'|'AWS::ECR::Repository'|'AWS::RDS::DBSnapshot'|'AWS::RDS::DBClusterSnapshot'|'AWS::SNS::Topic'|'AWS::S3Express::DirectoryBucket'|'AWS::DynamoDB::Table'|'AWS::DynamoDB::Stream'|'AWS::IAM::User', ResourceTypeDetails>|null $resourceTypeStatistics
 * @property int|null $totalActiveFindings
 * @property int|null $totalArchivedFindings
 * @property int|null $totalResolvedFindings
 */
class ExternalAccessFindingsStatistics extends Shape
{
    /**
     * @param array{
     *     resourceTypeStatistics?: array<'AWS::S3::Bucket'|'AWS::IAM::Role'|'AWS::SQS::Queue'|'AWS::Lambda::Function'|'AWS::Lambda::LayerVersion'|'AWS::KMS::Key'|'AWS::SecretsManager::Secret'|'AWS::EFS::FileSystem'|'AWS::EC2::Snapshot'|'AWS::ECR::Repository'|'AWS::RDS::DBSnapshot'|'AWS::RDS::DBClusterSnapshot'|'AWS::SNS::Topic'|'AWS::S3Express::DirectoryBucket'|'AWS::DynamoDB::Table'|'AWS::DynamoDB::Stream'|'AWS::IAM::User', ResourceTypeDetails>|null,
     *     totalActiveFindings?: int|null,
     *     totalArchivedFindings?: int|null,
     *     totalResolvedFindings?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
