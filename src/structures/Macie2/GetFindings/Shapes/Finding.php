<?php

namespace Sunaoka\Aws\Structures\Macie2\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $accountId
 * @property bool|null $archived
 * @property 'CLASSIFICATION'|'POLICY'|null $category
 * @property ClassificationDetails|null $classificationDetails
 * @property int|null $count
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $description
 * @property string|null $id
 * @property string|null $partition
 * @property PolicyDetails|null $policyDetails
 * @property string|null $region
 * @property ResourcesAffected|null $resourcesAffected
 * @property bool|null $sample
 * @property string|null $schemaVersion
 * @property Severity|null $severity
 * @property string|null $title
 * @property 'SensitiveData:S3Object/Multiple'|'SensitiveData:S3Object/Financial'|'SensitiveData:S3Object/Personal'|'SensitiveData:S3Object/Credentials'|'SensitiveData:S3Object/CustomIdentifier'|'Policy:IAMUser/S3BucketPublic'|'Policy:IAMUser/S3BucketSharedExternally'|'Policy:IAMUser/S3BucketReplicatedExternally'|'Policy:IAMUser/S3BucketEncryptionDisabled'|'Policy:IAMUser/S3BlockPublicAccessDisabled'|'Policy:IAMUser/S3BucketSharedWithCloudFront'|null $type
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class Finding extends Shape
{
    /**
     * @param array{
     *     accountId?: string|null,
     *     archived?: bool|null,
     *     category?: 'CLASSIFICATION'|'POLICY'|null,
     *     classificationDetails?: ClassificationDetails|null,
     *     count?: int|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     description?: string|null,
     *     id?: string|null,
     *     partition?: string|null,
     *     policyDetails?: PolicyDetails|null,
     *     region?: string|null,
     *     resourcesAffected?: ResourcesAffected|null,
     *     sample?: bool|null,
     *     schemaVersion?: string|null,
     *     severity?: Severity|null,
     *     title?: string|null,
     *     type?: 'SensitiveData:S3Object/Multiple'|'SensitiveData:S3Object/Financial'|'SensitiveData:S3Object/Personal'|'SensitiveData:S3Object/Credentials'|'SensitiveData:S3Object/CustomIdentifier'|'Policy:IAMUser/S3BucketPublic'|'Policy:IAMUser/S3BucketSharedExternally'|'Policy:IAMUser/S3BucketReplicatedExternally'|'Policy:IAMUser/S3BucketEncryptionDisabled'|'Policy:IAMUser/S3BlockPublicAccessDisabled'|'Policy:IAMUser/S3BucketSharedWithCloudFront'|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
