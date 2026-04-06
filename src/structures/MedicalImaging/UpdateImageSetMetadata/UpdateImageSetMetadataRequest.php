<?php

namespace Sunaoka\Aws\Structures\MedicalImaging\UpdateImageSetMetadata;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $datastoreId
 * @property string $imageSetId
 * @property string $latestVersionId
 * @property Shapes\MetadataUpdates $updateImageSetMetadataUpdates
 */
class UpdateImageSetMetadataRequest extends Request
{
    /**
     * @param array{
     *     datastoreId: string,
     *     imageSetId: string,
     *     latestVersionId: string,
     *     updateImageSetMetadataUpdates: Shapes\MetadataUpdates
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
