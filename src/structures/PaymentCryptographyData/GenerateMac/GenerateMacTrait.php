<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\GenerateMac;

trait GenerateMacTrait
{
    /**
     * @param GenerateMacRequest $args
     * @return GenerateMacResponse
     */
    public function generateMac(GenerateMacRequest $args)
    {
        $result = parent::generateMac($args->toArray());
        return new GenerateMacResponse($result->toArray());
    }
}
