<?php

namespace Sunaoka\Aws\Structures\MedicalImaging\UpdateImageSetMetadata;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $datastoreId
 * @property string $imageSetId
 * @property string $latestVersionId
 * @property bool $force
 * @property Shapes\MetadataUpdates $updateImageSetMetadataUpdates
 */
class UpdateImageSetMetadataRequest extends Request
{
    /**
     * @param array{
     *     datastoreId: string,
     *     imageSetId: string,
     *     latestVersionId: string,
     *     force?: bool,
     *     updateImageSetMetadataUpdates: Shapes\MetadataUpdates
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
