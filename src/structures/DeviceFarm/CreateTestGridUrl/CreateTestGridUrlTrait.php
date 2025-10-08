<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\CreateTestGridUrl;

trait CreateTestGridUrlTrait
{
    /**
     * @param CreateTestGridUrlRequest $args
     * @return CreateTestGridUrlResponse
     */
    public function createTestGridUrl(CreateTestGridUrlRequest $args)
    {
        $result = parent::createTestGridUrl($args->toArray());
        return new CreateTestGridUrlResponse($result->toArray());
    }
}
