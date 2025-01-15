<?php

namespace Sunaoka\Aws\Structures\Macie2\CreateSampleFindings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<'SensitiveData:S3Object/Multiple'|'SensitiveData:S3Object/Financial'|'SensitiveData:S3Object/Personal'|'SensitiveData:S3Object/Credentials'|'SensitiveData:S3Object/CustomIdentifier'|'Policy:IAMUser/S3BucketPublic'|'Policy:IAMUser/S3BucketSharedExternally'|'Policy:IAMUser/S3BucketReplicatedExternally'|'Policy:IAMUser/S3BucketEncryptionDisabled'|'Policy:IAMUser/S3BlockPublicAccessDisabled'|'Policy:IAMUser/S3BucketSharedWithCloudFront'>|null $findingTypes
 */
class CreateSampleFindingsRequest extends Request
{
    /**
     * @param array{findingTypes?: list<'SensitiveData:S3Object/Multiple'|'SensitiveData:S3Object/Financial'|'SensitiveData:S3Object/Personal'|'SensitiveData:S3Object/Credentials'|'SensitiveData:S3Object/CustomIdentifier'|'Policy:IAMUser/S3BucketPublic'|'Policy:IAMUser/S3BucketSharedExternally'|'Policy:IAMUser/S3BucketReplicatedExternally'|'Policy:IAMUser/S3BucketEncryptionDisabled'|'Policy:IAMUser/S3BlockPublicAccessDisabled'|'Policy:IAMUser/S3BucketSharedWithCloudFront'>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
