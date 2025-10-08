<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\PutApplicationGrant;

trait PutApplicationGrantTrait
{
    /**
     * @param PutApplicationGrantRequest $args
     * @return void
     */
    public function putApplicationGrant(PutApplicationGrantRequest $args)
    {
        parent::putApplicationGrant($args->toArray());
    }
}
