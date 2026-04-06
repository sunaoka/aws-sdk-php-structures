<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\CheckNoPublicAccess;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $policyDocument
 * @property 'AWS::DynamoDB::Table'|'AWS::DynamoDB::Stream'|'AWS::EFS::FileSystem'|'AWS::OpenSearchService::Domain'|'AWS::Kinesis::Stream'|'AWS::Kinesis::StreamConsumer'|'AWS::KMS::Key'|'AWS::Lambda::Function'|'AWS::S3::Bucket'|'AWS::S3::AccessPoint'|'AWS::S3Express::DirectoryBucket'|'AWS::S3::Glacier'|'AWS::S3Outposts::Bucket'|'AWS::S3Outposts::AccessPoint'|'AWS::SecretsManager::Secret'|'AWS::SNS::Topic'|'AWS::SQS::Queue'|'AWS::IAM::AssumeRolePolicyDocument' $resourceType
 */
class CheckNoPublicAccessRequest extends Request
{
    /**
     * @param array{
     *     policyDocument: string,
     *     resourceType: 'AWS::DynamoDB::Table'|'AWS::DynamoDB::Stream'|'AWS::EFS::FileSystem'|'AWS::OpenSearchService::Domain'|'AWS::Kinesis::Stream'|'AWS::Kinesis::StreamConsumer'|'AWS::KMS::Key'|'AWS::Lambda::Function'|'AWS::S3::Bucket'|'AWS::S3::AccessPoint'|'AWS::S3Express::DirectoryBucket'|'AWS::S3::Glacier'|'AWS::S3Outposts::Bucket'|'AWS::S3Outposts::AccessPoint'|'AWS::SecretsManager::Secret'|'AWS::SNS::Topic'|'AWS::SQS::Queue'|'AWS::IAM::AssumeRolePolicyDocument'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
