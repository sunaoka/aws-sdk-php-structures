<?php

namespace Sunaoka\Aws\Structures\CodeBuild\RetryBuildBatch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $location
 * @property string $sha256sum
 * @property string $md5sum
 * @property bool $overrideArtifactName
 * @property bool $encryptionDisabled
 * @property string $artifactIdentifier
 * @property 'NONE'|'READ_ONLY'|'FULL' $bucketOwnerAccess
 */
class BuildArtifacts extends Shape
{
    /**
     * @param array{
     *     location?: string,
     *     sha256sum?: string,
     *     md5sum?: string,
     *     overrideArtifactName?: bool,
     *     encryptionDisabled?: bool,
     *     artifactIdentifier?: string,
     *     bucketOwnerAccess?: 'NONE'|'READ_ONLY'|'FULL'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
