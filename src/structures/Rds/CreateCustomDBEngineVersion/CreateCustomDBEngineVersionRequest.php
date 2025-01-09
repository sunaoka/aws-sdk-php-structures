<?php

namespace Sunaoka\Aws\Structures\Rds\CreateCustomDBEngineVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Engine
 * @property string $EngineVersion
 * @property string $DatabaseInstallationFilesS3BucketName
 * @property string $DatabaseInstallationFilesS3Prefix
 * @property string $ImageId
 * @property string $KMSKeyId
 * @property string $Description
 * @property string $Manifest
 * @property list<Shapes\Tag> $Tags
 * @property string $SourceCustomDbEngineVersionIdentifier
 * @property bool $UseAwsProvidedLatestImage
 */
class CreateCustomDBEngineVersionRequest extends Request
{
    /**
     * @param array{
     *     Engine: string,
     *     EngineVersion: string,
     *     DatabaseInstallationFilesS3BucketName?: string,
     *     DatabaseInstallationFilesS3Prefix?: string,
     *     ImageId?: string,
     *     KMSKeyId?: string,
     *     Description?: string,
     *     Manifest?: string,
     *     Tags?: list<Shapes\Tag>,
     *     SourceCustomDbEngineVersionIdentifier?: string,
     *     UseAwsProvidedLatestImage?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
