<?php

namespace Sunaoka\Aws\Structures\FraudDetector\UpdateDetectorVersionMetadata;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $detectorId
 * @property string $detectorVersionId
 * @property string $description
 */
class UpdateDetectorVersionMetadataRequest extends Request
{
    /**
     * @param array{
     *     detectorId: string,
     *     detectorVersionId: string,
     *     description: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
