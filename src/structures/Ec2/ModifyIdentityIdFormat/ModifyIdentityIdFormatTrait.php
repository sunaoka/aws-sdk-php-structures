<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyIdentityIdFormat;

trait ModifyIdentityIdFormatTrait
{
    /**
     * @param ModifyIdentityIdFormatRequest $args
     * @return void
     */
    public function modifyIdentityIdFormat(ModifyIdentityIdFormatRequest $args)
    {
        parent::modifyIdentityIdFormat($args->toArray());
    }
}
