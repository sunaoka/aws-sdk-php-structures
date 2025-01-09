<?php

namespace Sunaoka\Aws\Structures\CodeBuild\BatchGetProjects\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CODEPIPELINE'|'S3'|'NO_ARTIFACTS' $type
 * @property string $location
 * @property string $path
 * @property 'NONE'|'BUILD_ID' $namespaceType
 * @property string $name
 * @property 'NONE'|'ZIP' $packaging
 * @property bool $overrideArtifactName
 * @property bool $encryptionDisabled
 * @property string $artifactIdentifier
 * @property 'NONE'|'READ_ONLY'|'FULL' $bucketOwnerAccess
 */
class ProjectArtifacts extends Shape
{
    /**
     * @param array{
     *     type: 'CODEPIPELINE'|'S3'|'NO_ARTIFACTS',
     *     location?: string,
     *     path?: string,
     *     namespaceType?: 'NONE'|'BUILD_ID',
     *     name?: string,
     *     packaging?: 'NONE'|'ZIP',
     *     overrideArtifactName?: bool,
     *     encryptionDisabled?: bool,
     *     artifactIdentifier?: string,
     *     bucketOwnerAccess?: 'NONE'|'READ_ONLY'|'FULL'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
