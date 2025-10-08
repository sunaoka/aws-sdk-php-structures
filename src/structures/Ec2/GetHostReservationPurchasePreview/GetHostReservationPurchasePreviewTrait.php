<?php

namespace Sunaoka\Aws\Structures\Ec2\GetHostReservationPurchasePreview;

trait GetHostReservationPurchasePreviewTrait
{
    /**
     * @param GetHostReservationPurchasePreviewRequest $args
     * @return GetHostReservationPurchasePreviewResponse
     */
    public function getHostReservationPurchasePreview(GetHostReservationPurchasePreviewRequest $args)
    {
        $result = parent::getHostReservationPurchasePreview($args->toArray());
        return new GetHostReservationPurchasePreviewResponse($result->toArray());
    }
}
