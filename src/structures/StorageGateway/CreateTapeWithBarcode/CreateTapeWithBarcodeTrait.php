<?php

namespace Sunaoka\Aws\Structures\StorageGateway\CreateTapeWithBarcode;

trait CreateTapeWithBarcodeTrait
{
    /**
     * @param CreateTapeWithBarcodeRequest $args
     * @return CreateTapeWithBarcodeResponse
     */
    public function createTapeWithBarcode(CreateTapeWithBarcodeRequest $args)
    {
        $result = parent::createTapeWithBarcode($args->toArray());
        return new CreateTapeWithBarcodeResponse($result->toArray());
    }
}
