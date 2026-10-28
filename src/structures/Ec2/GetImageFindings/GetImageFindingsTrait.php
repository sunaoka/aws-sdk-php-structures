<?php

namespace Sunaoka\Aws\Structures\Ec2\GetImageFindings;

trait GetImageFindingsTrait
{
    /**
     * @param GetImageFindingsRequest $args
     * @return GetImageFindingsResponse
     */
    public function getImageFindings(GetImageFindingsRequest $args)
    {
        $result = parent::getImageFindings($args->toArray());
        return new GetImageFindingsResponse($result->toArray());
    }
}
