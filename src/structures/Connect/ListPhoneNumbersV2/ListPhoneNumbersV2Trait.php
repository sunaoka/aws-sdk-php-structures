<?php

namespace Sunaoka\Aws\Structures\Connect\ListPhoneNumbersV2;

trait ListPhoneNumbersV2Trait
{
    /**
     * @param ListPhoneNumbersV2Request $args
     * @return ListPhoneNumbersV2Response
     */
    public function listPhoneNumbersV2(ListPhoneNumbersV2Request $args)
    {
        $result = parent::listPhoneNumbersV2($args->toArray());
        return new ListPhoneNumbersV2Response($result->toArray());
    }
}
