<?php

namespace Sunaoka\Aws\Structures\PartnerCentralMarketing\DeleteSocialConnection;

trait DeleteSocialConnectionTrait
{
    /**
     * @param DeleteSocialConnectionRequest $args
     * @return void
     */
    public function deleteSocialConnection(DeleteSocialConnectionRequest $args)
    {
        parent::deleteSocialConnection($args->toArray());
    }
}
