<?php

namespace Sunaoka\Aws\Structures\Rekognition\DetectProtectiveEquipment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\Image $Image
 * @property Shapes\ProtectiveEquipmentSummarizationAttributes|null $SummarizationAttributes
 */
class DetectProtectiveEquipmentRequest extends Request
{
    /**
     * @param array{
     *     Image: Shapes\Image,
     *     SummarizationAttributes?: Shapes\ProtectiveEquipmentSummarizationAttributes|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
