<?php

namespace Sunaoka\Aws\Structures\CloudFront\DeleteAnycastIpList;

trait DeleteAnycastIpListTrait
{
    /**
     * @param DeleteAnycastIpListRequest $args
     * @return void
     */
    public function deleteAnycastIpList(DeleteAnycastIpListRequest $args)
    {
        parent::deleteAnycastIpList($args->toArray());
    }
}
