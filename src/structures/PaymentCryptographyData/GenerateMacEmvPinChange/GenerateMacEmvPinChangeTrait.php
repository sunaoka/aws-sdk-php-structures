<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\GenerateMacEmvPinChange;

trait GenerateMacEmvPinChangeTrait
{
    /**
     * @param GenerateMacEmvPinChangeRequest $args
     * @return GenerateMacEmvPinChangeResponse
     */
    public function generateMacEmvPinChange(GenerateMacEmvPinChangeRequest $args)
    {
        $result = parent::generateMacEmvPinChange($args->toArray());
        return new GenerateMacEmvPinChangeResponse($result->toArray());
    }
}
