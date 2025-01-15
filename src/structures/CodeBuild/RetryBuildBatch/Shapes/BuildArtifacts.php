<?php

namespace Sunaoka\Aws\Structures\CodeBuild\RetryBuildBatch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $location
 * @property string|null $sha256sum
 * @property string|null $md5sum
 * @property bool|null $overrideArtifactName
 * @property bool|null $encryptionDisabled
 * @property string|null $artifactIdentifier
 * @property 'NONE'|'READ_ONLY'|'FULL'|null $bucketOwnerAccess
 */
class BuildArtifacts extends Shape
{
    /**
     * @param array{
     *     location?: string|null,
     *     sha256sum?: string|null,
     *     md5sum?: string|null,
     *     overrideArtifactName?: bool|null,
     *     encryptionDisabled?: bool|null,
     *     artifactIdentifier?: string|null,
     *     bucketOwnerAccess?: 'NONE'|'READ_ONLY'|'FULL'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
