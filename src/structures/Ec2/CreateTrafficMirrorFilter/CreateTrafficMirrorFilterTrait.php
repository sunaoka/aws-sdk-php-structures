<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateTrafficMirrorFilter;

trait CreateTrafficMirrorFilterTrait
{
    /**
     * @param CreateTrafficMirrorFilterRequest $args
     * @return CreateTrafficMirrorFilterResponse
     */
    public function createTrafficMirrorFilter(CreateTrafficMirrorFilterRequest $args)
    {
        $result = parent::createTrafficMirrorFilter($args->toArray());
        return new CreateTrafficMirrorFilterResponse($result->toArray());
    }
}
