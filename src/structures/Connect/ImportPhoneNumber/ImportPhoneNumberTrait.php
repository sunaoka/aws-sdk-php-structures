<?php

namespace Sunaoka\Aws\Structures\Connect\ImportPhoneNumber;

trait ImportPhoneNumberTrait
{
    /**
     * @param ImportPhoneNumberRequest $args
     * @return ImportPhoneNumberResponse
     */
    public function importPhoneNumber(ImportPhoneNumberRequest $args)
    {
        $result = parent::importPhoneNumber($args->toArray());
        return new ImportPhoneNumberResponse($result->toArray());
    }
}
