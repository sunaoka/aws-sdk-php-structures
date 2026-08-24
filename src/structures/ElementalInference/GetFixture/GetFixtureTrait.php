<?php

namespace Sunaoka\Aws\Structures\ElementalInference\GetFixture;

trait GetFixtureTrait
{
    /**
     * @param GetFixtureRequest $args
     * @return GetFixtureResponse
     */
    public function getFixture(GetFixtureRequest $args)
    {
        $result = parent::getFixture($args->toArray());
        return new GetFixtureResponse($result->toArray());
    }
}
