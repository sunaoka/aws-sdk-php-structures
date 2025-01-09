<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ArtifactIdentifier
 * @property bool $EncryptionDisabled
 * @property string $Location
 * @property string $Name
 * @property string $NamespaceType
 * @property bool $OverrideArtifactName
 * @property string $Packaging
 * @property string $Path
 * @property string $Type
 */
class AwsCodeBuildProjectArtifactsDetails extends Shape
{
    /**
     * @param array{
     *     ArtifactIdentifier?: string,
     *     EncryptionDisabled?: bool,
     *     Location?: string,
     *     Name?: string,
     *     NamespaceType?: string,
     *     OverrideArtifactName?: bool,
     *     Packaging?: string,
     *     Path?: string,
     *     Type?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
