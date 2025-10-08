<?php

namespace Sunaoka\Aws\Structures\Ec2\ImportKeyPair;

trait ImportKeyPairTrait
{
    /**
     * @param ImportKeyPairRequest $args
     * @return ImportKeyPairResponse
     */
    public function importKeyPair(ImportKeyPairRequest $args)
    {
        $result = parent::importKeyPair($args->toArray());
        return new ImportKeyPairResponse($result->toArray());
    }
}
