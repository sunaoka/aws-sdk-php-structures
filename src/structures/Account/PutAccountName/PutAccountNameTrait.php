<?php

namespace Sunaoka\Aws\Structures\Account\PutAccountName;

trait PutAccountNameTrait
{
    /**
     * @param PutAccountNameRequest $args
     * @return void
     */
    public function putAccountName(PutAccountNameRequest $args)
    {
        parent::putAccountName($args->toArray());
    }
}
