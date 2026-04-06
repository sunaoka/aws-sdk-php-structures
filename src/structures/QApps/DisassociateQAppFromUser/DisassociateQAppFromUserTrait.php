<?php

namespace Sunaoka\Aws\Structures\QApps\DisassociateQAppFromUser;

trait DisassociateQAppFromUserTrait
{
    /**
     * @param DisassociateQAppFromUserRequest $args
     * @return void
     */
    public function disassociateQAppFromUser(DisassociateQAppFromUserRequest $args)
    {
        parent::disassociateQAppFromUser($args->toArray());
    }
}
