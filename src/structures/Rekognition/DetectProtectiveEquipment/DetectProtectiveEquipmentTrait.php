<?php

namespace Sunaoka\Aws\Structures\Rekognition\DetectProtectiveEquipment;

trait DetectProtectiveEquipmentTrait
{
    /**
     * @param DetectProtectiveEquipmentRequest $args
     * @return DetectProtectiveEquipmentResponse
     */
    public function detectProtectiveEquipment(DetectProtectiveEquipmentRequest $args)
    {
        $result = parent::detectProtectiveEquipment($args->toArray());
        return new DetectProtectiveEquipmentResponse($result->toArray());
    }
}
