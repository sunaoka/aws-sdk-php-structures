<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ArtifactIdentifier
 * @property bool|null $EncryptionDisabled
 * @property string|null $Location
 * @property string|null $Name
 * @property string|null $NamespaceType
 * @property bool|null $OverrideArtifactName
 * @property string|null $Packaging
 * @property string|null $Path
 * @property string|null $Type
 */
class AwsCodeBuildProjectArtifactsDetails extends Shape
{
    /**
     * @param array{
     *     ArtifactIdentifier?: string|null,
     *     EncryptionDisabled?: bool|null,
     *     Location?: string|null,
     *     Name?: string|null,
     *     NamespaceType?: string|null,
     *     OverrideArtifactName?: bool|null,
     *     Packaging?: string|null,
     *     Path?: string|null,
     *     Type?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
