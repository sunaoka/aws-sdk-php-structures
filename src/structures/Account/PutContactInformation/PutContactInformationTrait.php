<?php

namespace Sunaoka\Aws\Structures\Account\PutContactInformation;

trait PutContactInformationTrait
{
    /**
     * @param PutContactInformationRequest $args
     * @return void
     */
    public function putContactInformation(PutContactInformationRequest $args)
    {
        parent::putContactInformation($args->toArray());
    }
}
