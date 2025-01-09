<?php

namespace Sunaoka\Aws\Structures\MedicalImaging\GetImageFrame;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $datastoreId
 * @property string $imageSetId
 * @property Shapes\ImageFrameInformation $imageFrameInformation
 */
class GetImageFrameRequest extends Request
{
    /**
     * @param array{
     *     datastoreId: string,
     *     imageSetId: string,
     *     imageFrameInformation: Shapes\ImageFrameInformation
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
