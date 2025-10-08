<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteTrafficMirrorFilter;

trait DeleteTrafficMirrorFilterTrait
{
    /**
     * @param DeleteTrafficMirrorFilterRequest $args
     * @return DeleteTrafficMirrorFilterResponse
     */
    public function deleteTrafficMirrorFilter(DeleteTrafficMirrorFilterRequest $args)
    {
        $result = parent::deleteTrafficMirrorFilter($args->toArray());
        return new DeleteTrafficMirrorFilterResponse($result->toArray());
    }
}
