<?php

namespace Sunaoka\Aws\Structures\Macie2\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $accountId
 * @property bool $archived
 * @property 'CLASSIFICATION'|'POLICY' $category
 * @property ClassificationDetails $classificationDetails
 * @property int $count
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $description
 * @property string $id
 * @property string $partition
 * @property PolicyDetails $policyDetails
 * @property string $region
 * @property ResourcesAffected $resourcesAffected
 * @property bool $sample
 * @property string $schemaVersion
 * @property Severity $severity
 * @property string $title
 * @property 'SensitiveData:S3Object/Multiple'|'SensitiveData:S3Object/Financial'|'SensitiveData:S3Object/Personal'|'SensitiveData:S3Object/Credentials'|'SensitiveData:S3Object/CustomIdentifier'|'Policy:IAMUser/S3BucketPublic'|'Policy:IAMUser/S3BucketSharedExternally'|'Policy:IAMUser/S3BucketReplicatedExternally'|'Policy:IAMUser/S3BucketEncryptionDisabled'|'Policy:IAMUser/S3BlockPublicAccessDisabled'|'Policy:IAMUser/S3BucketSharedWithCloudFront' $type
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class Finding extends Shape
{
    /**
     * @param array{
     *     accountId?: string,
     *     archived?: bool,
     *     category?: 'CLASSIFICATION'|'POLICY',
     *     classificationDetails?: ClassificationDetails,
     *     count?: int,
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     description?: string,
     *     id?: string,
     *     partition?: string,
     *     policyDetails?: PolicyDetails,
     *     region?: string,
     *     resourcesAffected?: ResourcesAffected,
     *     sample?: bool,
     *     schemaVersion?: string,
     *     severity?: Severity,
     *     title?: string,
     *     type?: 'SensitiveData:S3Object/Multiple'|'SensitiveData:S3Object/Financial'|'SensitiveData:S3Object/Personal'|'SensitiveData:S3Object/Credentials'|'SensitiveData:S3Object/CustomIdentifier'|'Policy:IAMUser/S3BucketPublic'|'Policy:IAMUser/S3BucketSharedExternally'|'Policy:IAMUser/S3BucketReplicatedExternally'|'Policy:IAMUser/S3BucketEncryptionDisabled'|'Policy:IAMUser/S3BlockPublicAccessDisabled'|'Policy:IAMUser/S3BucketSharedWithCloudFront',
     *     updatedAt?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
