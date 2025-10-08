<?php

namespace Sunaoka\Aws\Structures\PI\DescribeDimensionKeys;

trait DescribeDimensionKeysTrait
{
    /**
     * @param DescribeDimensionKeysRequest $args
     * @return DescribeDimensionKeysResponse
     */
    public function describeDimensionKeys(DescribeDimensionKeysRequest $args)
    {
        $result = parent::describeDimensionKeys($args->toArray());
        return new DescribeDimensionKeysResponse($result->toArray());
    }
}
