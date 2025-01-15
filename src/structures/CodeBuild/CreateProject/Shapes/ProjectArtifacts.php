<?php

namespace Sunaoka\Aws\Structures\CodeBuild\CreateProject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CODEPIPELINE'|'S3'|'NO_ARTIFACTS' $type
 * @property string|null $location
 * @property string|null $path
 * @property 'NONE'|'BUILD_ID'|null $namespaceType
 * @property string|null $name
 * @property 'NONE'|'ZIP'|null $packaging
 * @property bool|null $overrideArtifactName
 * @property bool|null $encryptionDisabled
 * @property string|null $artifactIdentifier
 * @property 'NONE'|'READ_ONLY'|'FULL'|null $bucketOwnerAccess
 */
class ProjectArtifacts extends Shape
{
    /**
     * @param array{
     *     type: 'CODEPIPELINE'|'S3'|'NO_ARTIFACTS',
     *     location?: string|null,
     *     path?: string|null,
     *     namespaceType?: 'NONE'|'BUILD_ID'|null,
     *     name?: string|null,
     *     packaging?: 'NONE'|'ZIP'|null,
     *     overrideArtifactName?: bool|null,
     *     encryptionDisabled?: bool|null,
     *     artifactIdentifier?: string|null,
     *     bucketOwnerAccess?: 'NONE'|'READ_ONLY'|'FULL'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
